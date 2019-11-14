

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="color: red" aria-hidden="true"><i class="fa fa-close"></i></span>
                </button>
                <h3 class="modal-title" id="exampleModalLabel">Place Your Request</h3>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{ route('request-a-book') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group">
                                <h3>Book: <span class="text-primary">{{ $book->book_name }}</span></h3>
                                <h4>Writer: <span class="text-primary">{{ $book->writer_name }}</span></h4>
                            </div>

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <input type="hidden" name="book_id" value="{{ $book->id }}">

                            <input type="hidden" name="category_id" value="{{ $book->category_id }}">

                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Your Message (Optional)"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group ">
                                <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



