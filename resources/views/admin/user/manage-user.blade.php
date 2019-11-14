@extends('admin.master')

@section('title')
    Manage User | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

    <main id="tg-main" class="tg-main tg-haslayout">



    @include('admin.include.message')

    <!--************************************
					Section Start
			*************************************-->
        <section class="tg-dbsectionspace tg-haslayout">
            <div class="row">
                <form class="tg-formtheme tg-formdashboard">
                    <fieldset>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="tg-dashboardbox">
                                <div class="tg-dashboardboxtitle">
                                    <h2>Manage User</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <nav class="tg-navtabledata">
                                        <ul>
                                            <li class="tg-active"><a href="*">All ({{ \App\User::where('role_id', 2)->count() }})</a></li>
                                            <li><a href="javascript:void(0);" data-category="active">Active ({{ \App\User::where('role_id', 2)->where('status' , 1 )->count() }})</a></li>
                                            <li><a href="javascript:void(0);" data-category="inactive">Inactive ({{ \App\User::where('role_id', 2)->where('status' , 0 )->count() }})</a></li>
                                        </ul>
                                    </nav>

                                    <table id="accountTable" class="table tg-dashboardtable tg-tablemyads dataTable js-exportable">
                                        <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>
														<span class="tg-checkbox">
															<input id="tg-checkedall" type="checkbox" name="myads" value="checkall">
															<label for="tg-checkedall"></label>
														</span>
                                            </th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Location</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Added On</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @php($i=1)
                                        @foreach($users as $user)

                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td data-title="">
														<span class="tg-checkbox">
															<input  type="checkbox">
                                                           <label></label>
														</span>
                                                </td>
                                                <td data-title="Photo">

                                                    <img  src="{{ asset('/') }}images/classifiedpro/author/img-07.jpg">

                                                    {{--@if($user->photo)--}}
                                                        {{--<img style="height: 40px;" src="{{asset($user->photo)}}">--}}
                                                    {{--@else--}}
                                                        {{--<img  src="{{asset('/') }}images/classifiedpro/author/img-07.jpg">--}}
                                                    {{--@endif--}}
                                                </td>
                                                <td data-title="Title">
                                                    <h3>{{ $user->name}}</h3>
                                                </td>
                                                <td data-title="Detail">
                                                    <h3>Location</h3>
                                                </td>
                                                <td data-title="Detail">
                                                    <h3>Address</h3>
                                                </td>
                                                <td data-title="Status">

                                                    @if($user->status == 1)
                                                        <span class="tg-adstatus tg-adstatusactive">active</span>
                                                    @endif

                                                    @if($user->status == 0)
                                                        <span class="tg-adstatus tg-adstatusdeleted">Deactive</span>
                                                    @endif

                                                </td>

                                                <td data-title="Date">
                                                    <time datetime="{{ $user->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $user->created_at)->format('d-M-y') }}</time>
                                                </td>
                                                <td data-title="Action">
                                                    <div class="tg-btnsactions">

                                                        <!--                                                            Status-->
                                                        <a class="tg-btnaction tg-btnactionview" href="{{route('update-book-writer-status',['id' => $user->id])}}">
                                                            @if($user->status == 0)
                                                                <i class="fa fa-unlock"></i>
                                                            @endif
                                                            @if($user->status == 1)
                                                                <i class="fa fa-lock"></i>
                                                            @endif
                                                        </a>

                                                        <!--                                                            Edit-->
                                                        <a class="tg-btnaction tg-btnactionedit" href="{{route('edit-book-writer',['id' => $user->id])}}"><i class="fa fa-pencil"></i></a>

                                                        <!--                                                            Delete-->
                                                        <a id="{{ $user->id }}" class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);" onclick="event.preventDefault();

                                                                var confirmDelete = confirm('Are you sure to Delete? __('+'{{ $user->name }}'+')')
                                                                if(confirmDelete) {
                                                                document.getElementById('deleteId'+'{{ $user->id }}').submit();
                                                                }
                                                                "><i class="fa fa-trash"></i></a>

                                                        <form id="deleteId{{ $user->id }}" action="{{ route('delete-book-writer') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $user->id }}" name="id"/>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
        <!--************************************
                Section End
        *************************************-->


    </main>


@endsection