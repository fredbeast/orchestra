<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Job;


class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('created_at', 'desc')->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->file('imgLg') && $request->file('thumbCol') && $request->file('thumbPen')) {
            $img_lg = $this->awsStore($request->file('imgLg'));
            $thumb_col = $this->awsStore($request->file('thumbCol'));
            $thumb_pen = $this->awsStore($request->file('thumbPen'));
        } else {
            return redirect()->back()->with('message', 'Image upload failed, include all images');
        }

        Job::create([
            'title' => request('title'),
            'url' => request('url'),
            'types' => request('types'),
            'tag' => request('tag'),
            'description' => request('description'),
            'thumb_pen' => $thumb_pen,
            'thumb_col' => $thumb_col,
            'img_lg' => $img_lg
        ]);
        return redirect('admin/jobs')->withSuccess('Image uploaded successfully');
    }

    private function awsStore($image)
    {
        $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        $name = time() . $image->getClientOriginalName();
        $filePath = 'jobs/' . $name;
        $imageUrl = $url . 'jobs/' . $name;
        Storage::disk('s3')->put($filePath, file_get_contents($image));
        return $imageUrl;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show(Job $job)
    {
        return view('admin.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Job $job)
    {
        // Checking if any new image entered
        if (!empty(request('thumbPen'))) {
            $thumb_pen = $this->awsUpdate($job->thumb_pen, request('thumbPen'));
            if (!empty($thumb_pen)) {
                $job->update(['thumb_pen' => $thumb_pen]);
            }
        }
        // Checking if any new image entered
        if (!empty(request('thumbCol'))) {
            $thumb_col = $this->awsUpdate($job->thumb_col, request('thumbCol'));
            if (!empty($thumb_col)) {
                $job->update(['thumb_col' => $thumb_col]);
            }
        }
        // Checking if any new image entered
        if (!empty(request('imgLg'))) {
            $img_lg = $this->awsUpdate($job->img_lg, request('imgLg'));
            if (!empty($img_lg)) {
                $job->update(['img_lg' => $img_lg]);
            }
        }
        // Update other content no matter what
        $job->update(request(['title', 'types', 'url', 'description', 'tag']));
        return back()->with('message','Everything updated successfully!');
    }

    private function awsUpdate($old, $new)
    {
        // Only progress with both old and new images existing
        if (!empty($old) && !empty($new)) {
            $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
            $name = time() . $new->getClientOriginalName();
            $filePath = 'jobs/' . $name;
            $imageUrl = $url . 'jobs/' . $name;
            $oldSplitUrl = explode('/', $old);
            $oldImageS3Id = end($oldSplitUrl);
            Storage::disk('s3')->put($filePath, file_get_contents($new));
            Storage::disk('s3')->delete('jobs/' . $oldImageS3Id);
            return $imageUrl;
        } else {
            return null;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        if (!empty($job->thumb_pen)) {
            $this->awsDelete($job->thumb_pen);
        }
        if (!empty($job->thumb_col)) {
            $this->awsDelete($job->thumb_col);
        }
        if (!empty($job->img_lg)) {
            $this->awsDelete($job->img_lg);
        }
        $job->delete();
        return redirect('admin/jobs')->with('message', 'Deleted!');
    }

    private function awsDelete($image)
    {
        $splitUrl = explode('/', $image);
        $imageOriginal = end($splitUrl);
        Storage::disk('s3')->delete('jobs/' . $imageOriginal);
    }
}
