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
        $jobs = Job::all();
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $thumb_pen = $this->awsStore($request->file('thumbPen'));
        $thumb_col = $this->awsStore($request->file('thumbCol'));
        $img_lg = $this->awsStore($request->file('imgLg'));
        Job::create([
            'title' => request('title'),
            'url' => request('subtitle'),
            'types' => request('content'),
            'description' => request('description'),
            'thumb_pen' => $thumb_pen,
            'thumb_col' => $thumb_col,
            'img_lg' => $img_lg
        ]);

        return redirect('admin/jobs')->withSuccess('Image uploaded successfully');
    }

    private function awsStore($image)
    {
        $url = 'http://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        $name = time() . $image->getClientOriginalName();
        $filePath = 'jobs/' . $name;
        $imageUrl = $url . 'jobs/' . $name;
        Storage::disk('s3')->put($filePath, file_get_contents($image));
        return $imageUrl;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        return view('admin.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        return view('admin.jobs.edit', compact('job'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Job $job)
    {
        $thumb_pen = $this->awsUpdate(request('thumbPen'));
        $thumb_col = $this->awsUpdate(request('thumbCol'));
        $img_lg = $this->awsUpdate(request('imgLg'));
        $job->update(['thumb_pen' => $thumb_pen, 'thumb_col' => $thumb_col, '$img_lg' => $img_lg]);
        $job->update(request(['title', 'types', 'url', 'content']));
        return back()->withSuccess('Everything updated successfully!');
    }

    private function awsUpdate($image)
    {
        $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
        $name = time() . $image->getClientOriginalName();
        $filePath = 'jobs/' . $name;
        $imageUrl = $url . 'jobs/' . $name;
        $oldImageUrl = Job::find(request('id'));
        $oldImageS3Id = end($oldImageUrl);
        Storage::disk('s3')->put($filePath, file_get_contents($image));
        if (!empty($oldImageS3Id)) {
            Storage::disk('s3')->delete('images/' . $oldImageS3Id);
        }
        return $imageUrl;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
