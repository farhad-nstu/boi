@extends('admin.master')

@section('title')
    Manage Writer | Admin | Boi Chakra
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
                                    <h2>Manage Writer</h2>
                                </div>
                                <div class="tg-dashboardholder">
                                    <nav class="tg-navtabledata">
                                        <ul>
                                            <li class="tg-active"><a href="*">All ({{ \App\BookWriter::count() }})</a></li>
                                            <li><a href="javascript:void(0);" data-category="active">Active ({{ \App\BookWriter::where('status' , 1 )->count() }})</a></li>
                                            <li><a href="javascript:void(0);" data-category="inactive">Inactive ({{ \App\BookWriter::where('status' , 0 )->count() }})</a></li>
                                        </ul>
                                    </nav>

                                    <table id="tg-adstype" class="table tg-dashboardtable tg-tablemyads dataTable js-exportable">
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
                                            <th>Details</th>
                                            <th>Status</th>
                                            <th>Added On</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @php($i=1)
                                        @foreach($writers as $writer)

                                            <tr data-category="active" id="tr_{{$writer->id}}">
                                                <td>{{ $i++ }}</td>
                                                <td data-title="">
														<span class="tg-checkbox">
															<input id="sub_chk{{ $writer->id }}"  type="checkbox" data-id="{{$writer->id}}">
                                                           <label for="sub_chk{{ $writer->id }}"></label>
														</span>
                                                </td>
                                                <td data-title="Photo">
                                                    @if($writer->writer_image)
                                                        <img style="height: 40px;" src="{{asset($writer->writer_image)}}">
                                                    @else
                                                        <img src="images/thumbnail/img-06.jpg">
                                                    @endif
                                                </td>
                                                <td data-title="Title">
                                                    <h3>{{ $writer->writer_name}}</h3>
                                                </td>
                                                <td data-title="Detail">
                                                    <h3>{{ $writer->writer_details}}</h3>
                                                </td>
                                                <td data-title="Status">

                                                    @if($writer->status == 1)
                                                        <span class="tg-adstatus tg-adstatusactive">active</span>
                                                    @endif

                                                    @if($writer->status == 0)
                                                        <span class="tg-adstatus tg-adstatusdeleted">Deactive</span>
                                                    @endif

                                                </td>

                                                <td data-title="Date">
                                                    <time datetime="{{ $writer->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $writer->created_at)->format('d-M-y') }}</time>

                                                </td>
                                                <td data-title="Action">
                                                    <div class="tg-btnsactions">

                                                        <!--                                                            Status-->
                                                        <a class="tg-btnaction tg-btnactionview" href="{{route('update-book-writer-status',['id' => $writer->id])}}">
                                                            @if($writer->status == 0)
                                                                <i class="fa fa-unlock"></i>
                                                            @endif
                                                            @if($writer->status == 1)
                                                                <i class="fa fa-lock"></i>
                                                            @endif
                                                        </a>

                                                        <!--                                                            Edit-->
                                                        <a class="tg-btnaction tg-btnactionedit" href="{{route('edit-book-writer',['id' => $writer->id])}}"><i class="fa fa-pencil"></i></a>

                                                        <!--                                                            Delete-->
                                                        <a id="{{ $writer->id }}" class="tg-btnaction tg-btnactiondelete" href="javascript:void(0);" onclick="event.preventDefault();

                                                                var confirmDelete = confirm('Are you sure to Delete? __('+'{{ $writer->writer_name }}'+')')
                                                                if(confirmDelete) {
                                                                document.getElementById('deleteId'+'{{ $writer->id }}').submit();
                                                                }
                                                                "><i class="fa fa-trash"></i></a>

                                                        <form id="deleteId{{ $writer->id }}" action="{{ route('delete-book-writer') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{ $writer->id }}" name="id"/>
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