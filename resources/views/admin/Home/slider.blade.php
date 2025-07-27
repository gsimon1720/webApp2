@extends('admin.layouts.master')

@section('content')

   <div class="w-full px-4">
    <h1>Slider</h1><br>


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Add New Backdrop
</button>
<div class="mt-3">
@if(session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    </div>
@endif

    
@if($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error )
      <li>{{ $error }}</li>
      
    @endforeach
  </ul>
</div>
@endif
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title text-dark" id="exampleModalLabel">Add new backdrop</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="/saveSlider" method="POST" enctype="multipart/form-data">
          @csrf
            <!-- Body -->
            <div class="modal-body">

                <!--Heading-->
                <div class="mb-3">
                        <label for="heading" class="form-label">Heading</label>
                        <input type="text" class="form-control" id="heading" name="heading" placeholder="Enter heading">
                </div>
                <!--Sub heading-->
                <div class="mb-3">
                        <label for="sub_heading" class="form-label">Sub heading</label>
                        <input type="text" class="form-control" id="sub_heading" name="sub_heading" placeholder="Enter sub heading">
                </div>

                <div class="mb-3">
                        <label for="paragraph" class="form-label">Paragraph</label>
                        <input type="text" class="form-control" id="paragraph" name="paragraph" placeholder="Enter paragraph">
                </div>

                <div class="mb-3">
                        <label for="button_text" class="form-label">Button text</label>
                        <input type="text" class="form-control" id="button_text" name="button_text" placeholder="Enter button text">
                </div>

                <div class="mb-3">
                        <label for="animation_link" class="form-label">Animation link</label>
                        <input type="url" class="form-control" id="animation_link" name="animation_link" placeholder="Enter the url">
                </div>

            </div>
            
            <!-- Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Add backdrop</button>
            </div>
        </form>
    </div>
  </div>
</div>
<!--end modal-->
               <div class="card">
                  
                  <div class="card-body p-0">
                    <table class="table table-bordered table-striped mb-0">
                      <thead class="table-dark">
                        <tr class="text-center">
                          <th>Heading</th>
                          <th>Sub Heading</th>
                          <th>Paragraph</th>
                          <th>Button Text</th>
                          <th>Animation URL</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($sliders as $slider)
                          
                        
                        <tr>
                          <td class="bg-dark text-white text-center">{{ $slider->heading}}</td>
                          <td class="bg-dark text-white text-center">{{ $slider->sub_heading }}</td>
                          <td class="bg-dark text-white text-center">{{ $slider->paragraph }}</td>
                          <td class="bg-dark text-white text-center">{{ $slider->button_text }}</td>
                          <td class="bg-dark text-white text-center">{{ $slider->animation_link }}</td>
                          <td class="bg-dark text-white text-center"><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#slideModal{{$slider->id}}">Edit</button>
                              <a href="/deleteSlider/{{ $slider->id }}" class="btn btn-danger">Delete</a>
                          </td>
                        </tr>
                         <div class="modal fade" id="slideModal{{$slider->id}}" tabindex="-1" aria-labelledby="slideModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="slideModalLabel">Edit  Slide {{$slider->id}}</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="/sliderUpdate" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="slider_id" value="{{$slider->id}}">
                                <div class="modal-body">
                                        
                                        
                                        <!-- Heading -->
                                        <div class="mb-3">
                                          <label for="heading" class="form-label">Heading</label>
                                          <input type="text" class="form-control" id="heading" name="heading" value="{{$slider->heading}}">
                                        </div>
                                        <!--Sub Heading-->
                                        <div class="mb-3">
                                          <label for="sub_heading" class="form-label">Sub Heading</label>
                                          <input type="text" class="form-control" id="sub_heading" name="sub_heading" value="{{$slider->sub_heading}}">
                                        </div>
                                        
                                        <!-- Paragraph -->
                                        <div class="mb-3">
                                          <label for="paragraph" class="form-label">Paragraph</label>
                                          <input type="text" class="form-control" id="paragraph" name="paragraph" value="{{$slider->paragraph}}">
                                        </div>
                                        
                                        <!-- Button Text -->
                                         <div class="mb-3">
                                          <label for="button_text" class="form-label">Button text</label>
                                          <input type="text" class="form-control" id="button_text" name="button_text" value="{{$slider->button_text}}">
                                        </div>
                                      
                                        <!-- More Info Link -->
                                        <div class="mb-3">
                                          <label for="animation_link" class="form-label">Animation Link</label>
                                          <input type="url" class="form-control" id="animation_link" name="animation_link" value="{{$slider->animation_link}}">
                                        </div>
                    
                                        
                                      
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                              </div>
                            </div>
                          </div>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>


</div>
@endsection