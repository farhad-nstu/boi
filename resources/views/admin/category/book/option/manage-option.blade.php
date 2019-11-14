@extends('admin.master')

@section('title')
    Manage Option | Admin | Boi Chakra
@endsection

@section('body')

    @include('admin.include.dashboard-banner')

<main id="tg-main" class="tg-main tg-haslayout">
    

    @include('admin.include.message')
    @include('admin.category.book.option.inc.message')
    

<!--					Section Start-->
    
    <section class="tg-dbsectionspace tg-haslayout">
        
        <div class="row">
                @include('admin.category.book.option.inc.add-option')   
        </div>
        		
    </section>
    
    <section class="tg-dbsectionspace tg-haslayout">

        @include('admin.category.book.option.inc.genre-option')

        @include('admin.category.book.option.inc.language-option')

        @include('admin.category.book.option.inc.tag-option')
					
    </section>
	
    
		
</main>

@endsection