@extends('layouts.cms')

@section('title', __("cms-pages.new-course"))
@section('header-tools')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="ti ti-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">{{ __("cms-pages.courses") }}</a></li>
        <li class="breadcrumb-item active">{{ __("cms-pages.new") }}</li>
    </ul>
@endsection
@section('content')
    <form class="form-horizontal" method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row flex-row">
            <div class="col-12">
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>{{ __("cms-pages.course-form") }}</h4>
                    </div>
                    <div class="widget-body">

                        {{-- Course Publish Date --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.publish-date") }}</label>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="la la-calendar"></i></span>
                                        <input type="text" name="publish_date" class="form-control" id="date"
                                               value="{{old('publish_date')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Course Language --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.language") }}</label>
                            <div class="col-lg-9">
                                <select name="language_id"
                                        class="custom-select form-control">
                                    <option value="" selected disabled>{{ __("cms-pages.course-language") }}</option>
                                    @foreach($languages as $language)
                                        <option value="{{ $language->id }}">{{ __("languages.".$language->label) }}</option>
                                    @endforeach
                                </select>
                                @error('language_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Course Category --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.category") }}</label>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <select id="category_select" name="category_id"
                                                class="custom-select form-control">
                                            <option value="" selected disabled>{{ __("cms-pages.category") }}</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                            <option value="0">{{ __("cms-pages.other") }}</option>
                                        </select>
                                        @error('category_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div id="new_category" class="col-lg-6">
                                        <input type="text" name="category" class="form-control"
                                               placeholder="{{ __("cms-pages.new-category") }}"
                                               value="{{old('category')}}" disabled>
                                        @error('category')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Course Title --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.title") }}<span
                                        class="text-danger ml-2">*</span></label>
                            <div class="col-lg-9">
                                <input type="text" name="title" class="form-control"
                                       placeholder="{{ __("cms-pages.title") }}" value="{{old('title')}}">
                                @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Course Description--}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.description") }}</label>
                            <div class="col-lg-9">
                                <textarea id="description" name="description" class="form-control" rows="3"
                                          placeholder="{{ __("cms-pages.description") }}">{{old('description')}}</textarea>
                                @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Course Image --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.main-image") }}</label>
                            <div class="col-lg-9">
                                <div class="form-group preview">
                                    <div class="current-item">
                                        <img src="{{asset('assets/cms/img/no-image.jpg')}}" width="240" alt>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary square mr-1 mb-2 btn-attach"
                                        data-type="image"
                                        data-var="image" data-toggle="modal" data-target="#modal-files">
                                    {{__("cms-pages.choose")}}
                                </button>
                            </div>
                        </div>
                        {{-- Course Video --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.video") }}</label>
                            <div class="col-lg-9">
                                <div class="form-group preview"></div>
                                <button type="button" class="btn btn-primary square mr-1 mb-2 btn-attach"
                                        data-type="video"
                                        data-var="video" data-toggle="modal" data-target="#modal-files">
                                    {{__("cms-pages.choose")}}
                                </button>
                                <input type="text" name="youtube" class="form-control"
                                       placeholder="{{ __("cms-pages.video-link") }}" value="{{old('video')}}">
                            </div>
                        </div>
                        {{-- Course Difficulty Level --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.difficulty-level") }}</label>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-xl-2">
                                        <div class="mb-3">
                                            <div class="styled-radio">
                                                <input type="radio" name="difficulty_level" id="beginner"
                                                       value="beginner"
                                                       checked>
                                                <label for="beginner">{{ __("cms-pages.beginner") }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="mb-3">
                                            <div class="styled-radio">
                                                <input type="radio" name="difficulty_level" id="intermediate"
                                                       value="intermediate">
                                                <label for="intermediate">{{ __("cms-pages.intermediate") }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="mb-3">
                                            <div class="styled-radio">
                                                <input type="radio" name="difficulty_level" id="expert" value="expert">
                                                <label for="expert">{{ __("cms-pages.expert") }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Course Type --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.course-type") }}</label>
                            <div class="col-lg-9">
                                <div class="row">
                                    <div class="col-xl-2">
                                        <div class="mb-3">
                                            <div class="styled-radio">
                                                <input type="radio" name="type" id="free" value="free"
                                                       checked>
                                                <label for="free">{{ __("cms-pages.free") }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-2">
                                        <div class="mb-3">
                                            <div class="styled-radio">
                                                <input type="radio" name="type" id="paid" value="paid">
                                                <label for="paid">{{ __("cms-pages.paid") }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- Course Price --}}
                        <div id="price" class="form-group hide row align-items-center mb-5 ">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.price") }}</label>
                            <div class="col-lg-9">
                                <input type="number" name="price" class="form-control"
                                       placeholder="{{ __("cms-pages.price") }}" value="{{old('price')}}">
                                @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Course Sale Price --}}
                        <div id="sale_price" class="form-group hide row align-items-center mb-5 ">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.sale-price") }}</label>
                            <div class="col-lg-9">
                                <input type="number" name="sale_price" class="form-control"
                                       placeholder="{{ __("cms-pages.sale-price") }}" value="{{old('sale_price')}}">
                                @error('sale_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- Course Additional Info --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.additional-info") }}</label>
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <div class="styled-checkbox">
                                        <input type="checkbox" name="is_new" id="is_new" value="1" checked>
                                        <label for="is_new">{{ __("cms-pages.new-course") }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- SEO Data --}}
                        <div class="section-title mt-5 mb-5">
                            <h4>{{__("cms-pages.seo-optimization")}}</h4>
                        </div>
                        {{-- SEO: Meta-title --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.meta-title") }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="meta_title" class="form-control" value="{{old('meta_title')}}">
                                @error('meta_title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        {{-- SEO: Meta-description --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.meta-description") }}</label>
                            <div class="col-lg-9">
                                <textarea name="meta_description" rows="3"
                                          class="form-control">{{old('meta_description')}}</textarea>
                            </div>
                        </div>
                        {{-- SEO: Meta-keywords --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.meta-keywords") }}</label>
                            <div class="col-lg-9">
                                <input type="text" name="meta_keywords" class="form-control"
                                       value="{{old('meta_keywords')}}">
                                @error('meta_keywords')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="em-separator separator-dashed"></div>
                        {{-- Is Published --}}
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">{{ __("cms-pages.publication") }}</label>
                            <div class="col-lg-9">
                                <div class="mb-3">
                                    <div class="styled-checkbox">
                                        <input type="checkbox" name="is_published" id="is_published" value="1">
                                        <label for="is_published">{{ __("cms-pages.publish") }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.cms.template-parts.form-buttons')
    </form>
@endsection
@section('modal')
    @include('layouts.cms.template-parts.modals.upload-and-choose-files')
@endsection
@section('page-scripts')
    @include('layouts.cms.template-parts.scripts-forms')
    <script src="{{asset('assets/cms/vendors/js/ckeditor/ckeditor.js')}}"></script>
    <script>
        $(document).ready(function () {
            CKEDITOR.replace('description', {
                filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
        });
    </script>
    <script src="{{asset('assets/cms/js/youtube.min.js')}}"></script>
    <script src="{{asset('assets/cms/js/ajax-store.min.js')}}"></script>
@endsection
