<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Http\Requests\StoreTestimonialRequest;
use App\Http\Requests\UpdateTestimonialRequest;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(perPage: config('pagination.count'));
        return view('admin.testimonials.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestimonialRequest $request)
    {
        //
        $data = $request->validated();
        $image= $request->image;
        $imagename = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('testimonials',$imagename,'public');
        $data['image'] = $imagename;
        Testimonial::create($data);
        return to_route('admin.testimonials.index')->with('success',__('keyWords.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
        return view('admin.testimonials.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view('admin.testimonials.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestimonialRequest $request, Testimonial $testimonial)
    {
        //
        $data = $request->validated();
        if($request->hasFile('image')){
        Storage::delete("public/testimonials/$testimonial->image");
        $image= $request->image;
        $imagename = time() . '-' . $image->getClientOriginalName();
        $image->storeAs('testimonials',$imagename,'public');
        $data['image'] = $imagename;
        }
        $testimonial->update($data);
        return to_route('admin.testimonials.index')->with('success',__('keyWords.updated_successfully'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::delete("public/testimonials/$testimonial->image");
        $testimonial->delete();
        return  to_route('admin.testimonials.index')->with('success',__('keyWords.deleted_successfully'));
    }
}
