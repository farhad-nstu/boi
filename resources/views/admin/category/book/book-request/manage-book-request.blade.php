@extends('admin.master')

@section('title')
    Manage Book Request | Admin | Boi Chakra
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
                                    <h2>All Book Request</h2>
                                </div>
                                @if($bookRequests->count())
                                    <div class="tg-dashboardholder">
                                        <nav class="tg-navtabledata">
                                            <ul>
                                                <li class="tg-active"><a href="*">All ({{ \App\Book::count() }})</a></li>
                                                <li><a href="javascript:void(0);" data-category="active">Pending ({{ \App\BookRequest::where('status' , 0 )->count() }})</a></li>
                                                <li><a href="javascript:void(0);" data-category="inactive">Accepted ({{ \App\BookRequest::where('status' , 1 )->count() }})</a></li>
                                                <li><a href="javascript:void(0);" data-category="inactive">Cancel ({{ \App\BookRequest::where('status' , 2 )->count() }})</a></li>
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
                                                <th>Cover</th>
                                                <th>Book Name</th>
                                                <th>Request by</th>
                                                <th>Message</th>
                                                <th>Mobile</th>
                                                <th>Location</th>
                                                <th>Added On</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>

                                            <tbody>

                                            @php($i=1)

                                            @foreach($bookRequests as $book)

                                                <tr data-category="active">
                                                    <td>{{ $i++ }}</td>
                                                    <td data-title="">
														<span class="tg-checkbox">
															<input id="tg-adone" type="checkbox" name="myads" value="myadone">
															<label for="tg-adone"></label>
														</span>
                                                    </td>
                                                    <td data-title="Photo">
                                                        @if($book->book_cover)
                                                            <img style="width: 80px;" src="{{asset($book->book_cover)}}">
                                                        @else
                                                            <img src="{{ asset('/') }}admin/images/thumbnail/img-06.jpg">
                                                        @endif
                                                    </td>
                                                    <td data-title="Title">
                                                        <h3>{{ $book->book_name}}</h3>
                                                    </td>

                                                    <td data-title="Title">
                                                        <h3>{{ $book->name}}</h3>
                                                    </td>
                                                    <td data-title="Title">
                                                        <h3>{{ $book->message}}</h3>
                                                    </td>
                                                    <td data-title="Title">
                                                        <h3>{{ $book->mobile}}</h3>
                                                    </td>
                                                    <td data-title="Title">
                                                        <h3>Location</h3>
                                                    </td>

                                                    <td data-title="Date">
                                                        <time datetime="{{ $book->created_at}}">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $book->created_at)->format('d-M-y') }}</time>
                                                    </td>
                                                    <td data-title="Action" >
                                                        <div class="tg-btnsactions">
                                                            @if($book->status == 0)
                                                                <p><span class="text-warning">Pending</span></p>
                                                            @endif

                                                            @if($book->status == 1)
                                                                <p><span class="text-danger">Accepted</span></p>
                                                            @endif

                                                            @if($book->status == 2)
                                                                <p><span class="text-danger">Canceled</span></p>
                                                            @endif

                                                            @if($book->status == 0)
                                                                <button class="btn btn-success" type="button">Accept</button>
                                                                <button class="btn btn-danger" type="button">Cancel</button>
                                                            @endif

                                                            @if($book->status == 1)
                                                                <button class="btn btn-danger" type="button">Cancel</button>
                                                            @endif

                                                            @if($book->status == 2)
                                                                <span class="text-danger"></span>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>

                                        @if($bookRequests->count())
                                        @endif

                                    </div>
                                @else
                                    <h3 style="margin-top: 50px; color: red; margin-left: 20px;">No Books Found</h3>
                                @endif

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