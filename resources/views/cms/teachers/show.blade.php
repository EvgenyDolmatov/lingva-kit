@extends('layouts.cms')

@section('title', $teacher->getFullName())
@section('header-tools')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="ti ti-home"></i></a></li>
        <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}">{{ __("cms-pages.teachers") }}</i></a></li>
        <li class="breadcrumb-item active">{{ $teacher->getFullName() }}</li>
    </ul>
@endsection
@section('content')
    <div class="row flex-row">
        <div class="col-xl-12">
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center justify-content-between">
                    <h4>{{ __("cms-pages.about-teacher") }}</h4>

                    <div class="form-group">

                        @if($teacher->is_active)
                            <form style="display: inline-block" method="POST"
                                  action="{{ route('users.ban-switcher', $teacher->id) }}">
                                @csrf @method('PUT')

                                <a href="{{ route('users.ban-switcher', $teacher->id) }}" type="button"
                                   onclick="event.preventDefault();if(confirm('{{ __("cms-messages.block-user") }}')){this.closest('form').submit();}"
                                   class="btn btn-danger mr-1 mb-2">{{ __("cms-pages.block-user") }}</a>
                            </form>
                        @else
                            <form style="display: inline-block" method="POST"
                                  action="{{ route('users.ban-switcher', $teacher->id) }}">
                                @csrf @method('PUT')

                                <a href="{{ route('users.ban-switcher', $teacher->id) }}" type="button"
                                   onclick="event.preventDefault();if(confirm('{{ __("cms-messages.unblock-user") }}')){this.closest('form').submit();}"
                                   class="btn btn-success mr-1 mb-2">{{ __("cms-pages.unblock-user") }}</a>
                            </form>
                        @endif


                        <a href="{{ route('students.edit', $teacher->id) }}" type="button"
                           class="btn btn-primary mr-1 mb-2">{{ __("cms-pages.edit") }}</a>
                    </div>

                </div>
                <div class="widget-body">
                    <div class="row flex-row">
                        <div class="col-xl-9">
                            {{-- Student Full Name --}}
                            <div class="about-infos d-flex flex-column mb-3">
                                <div class="about-title"><h5>{{ __("cms-pages.full-name") }}:</h5></div>
                                <div class="about-text">{{ $teacher->getFullName() }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-12">
            <div class="widget has-shadow">
                {{--                <div class="widget-header bordered no-actions d-flex align-items-center justify-content-between">
                                    <h4>{{ __("cms-pages.courses") }}</h4>
                                    <a href="{{ route('students.course.add', $teacher->id) }}" type="button"
                                       class="btn btn-primary mr-1 mb-2">{{ __("cms-pages.give-access-to-course") }}</a>
                                </div>--}}

                <div class="widget-body">
                    <div class="table-responsive">
                        <table id="sorting-table" class="table mb-0">
                            <thead>
                            <tr>
                                <th>{{ __("cms-pages.image") }}</th>
                                <th>{{ __("cms-pages.course") }}</th>
                                <th>{{ __("cms-pages.progress") }}</th>
                                <th>{{ __("cms-pages.actions") }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td style="width: 150px;">
                                        <img src="{{ $course->getImage() }}" width="100" alt>
                                    </td>
                                    <td class="text-primary">
                                        <a href="{{route('courses.show', $course->id)}}" class="text-primary">
                                            {{ $course->title }}
                                        </a>
                                    </td>
                                    <td class="text-primary">{{ $course->getProgress($teacher) }}</td>

                                    <td class="td-actions">
                                        <a href="{{ route('students.course.show', [$teacher->id, $course->id]) }}">
                                            <i class="la la-eye edit"></i>
                                        </a>

                                        <form style="display: inline-block" method="POST" action="{{ route('courses.moderate-switcher', $course->id) }}">
                                            @csrf @method('PUT')

                                            @if($course->is_allowed)
                                                <a href="{{ route('courses.moderate-switcher', $course->id) }}"
                                                   onclick="event.preventDefault();this.closest('form').submit();">
                                                    <i class="la la-ban edit"></i>
                                                </a>
                                            @else
                                                <a href="{{ route('courses.moderate-switcher', $course->id) }}"
                                                   onclick="event.preventDefault();this.closest('form').submit();">
                                                    <i class="la la-ban edit banned"></i>
                                                </a>
                                            @endif


                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-scripts')
    @include('layouts.cms.template-parts.scripts-forms')
    <script src="{{asset('assets/cms/vendors/js/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection

