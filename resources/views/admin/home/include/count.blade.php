<section class="tg-dbsectionspace tg-haslayout tg-statistics">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <a href="{{ route('manage-book') }}">
                <div class="tg-dashboardbox tg-statistic">
                    <div class="tg-contentbox">
                        <h2><i class="fa fa-book"></i> {{ \App\Book::count() }}</h2>
                        <h3>Books</h3>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <a href="{{ route('manage-user') }}">
                <div class="tg-dashboardbox tg-statistic">
                    <div class="tg-contentbox">
                        <h2><i class="fa fa-user"></i> {{ \App\User::where('role_id', 2)->count() }}</h2>
                        <h3>Users</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <a href="{{ route('manage-book-request') }}">
                <div class="tg-dashboardbox tg-statistic">
                    <div class="tg-contentbox">
                        <h2><i class="fa fa-share-square"></i> {{ \App\BookRequest::count() }}</h2>
                        <h3>Book Requests</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <div class="tg-dashboardbox tg-statistic">
                <a href="javascript:void(0);">
                    <span class="tg-badge">7</span>
                    <div class="tg-contentbox">
                        <h2><i class="fa fa-envelope"></i> 0 </h2>
                        <h3>Messages</h3>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div style="margin-top: 20px;"></div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <a href="{{ route('manage-book-writer') }}">
                <div class="tg-dashboardbox tg-statistic">
                    <div class="tg-contentbox">
                        <h2><i class="fa fa-user-circle"></i> {{ \App\BookWriter::count() }}</h2>
                        <h3>Writers</h3>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <a href="{{ route('manage-book-publisher') }}">
                <div class="tg-dashboardbox tg-statistic">
                    <div class="tg-contentbox">
                        <h2><i class="fa fa-building"></i> {{ \App\BookPublisher::count() }}</h2>
                        <h3>Publishers</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
            <a href="{{ route('manage-book-category') }}">
                <div class="tg-dashboardbox tg-statistic">
                    <div class="tg-contentbox">
                        <h2><i class="fa fa-bars"></i> {{ \App\BookCategory::count() }}</h2>
                        <h3>Categories</h3>
                    </div>
                </div>
            </a>
        </div>

    </div>
</section>