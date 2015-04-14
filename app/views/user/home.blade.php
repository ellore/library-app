@extends('user.master')
@section('title')
    Library | Home
@endsection

@section('link')
    <link rel="stylesheet" type="text/css" href="{{asset('user-assets/search/css/default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user-assets/search/css/component.css')}}" />

    <script src="{{asset('user-assets/search/js/modernizr.custom.js')}}"></script>
@endsection

@section('main_content')
           
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading" style="margin-top: 15px;"><div class="text-center" style="font-size:20px;"><strong>SEARCH CATALOG</strong></div>
                    <div class="panel-body" style="margin-top: 10px;">
                        <form class="form-horizontal row">
                            <div class="form-group form-group-lg">
                                <label class="col-sm-offset-2 col-sm-1 control-label" for="name"><strong>SEARCH</strong></label>
                                <div class="col-sm-7 ">
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="col-sm-offset-2">

                                </div>
                            </div>
                        </form>

                        <form class="form-inline row" style="margin-top:15px;">

                            <div class="form-group col-md-3 col-md-offset-2">
                                <label for="select1">Database&nbsp&nbsp</label>
                                <select class="form-control">
                                    <option>Books</option>
                                    <option>Journals</option>
                                    <option>Reports</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 ">
                                <label for="select2">Linked As&nbsp&nbsp</label>
                                <select class="form-control">
                                    <option>And</option>
                                    <option>Or</option>
                                    <option>Phrase</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3 " >
                                <label for="select3">in&nbsp&nbsp</label>
                                <select class="form-control">
                                    <option>Any Field</option>
                                    <option>Author</option>
                                    <option>ISBN</option>
                                    <option>Publisher</option>
                                    <option>Title</option>
                                </select>
                            </div>
                        </form>

                        <form class="form-horizontal" style="margin-top:40px;">
                            <div class="col-md-offset-5 col-sm-6">
                            <button type="submit" class="btn btn-default btn-lg" style="padding:6px 25px 6px 25px; margin-left:15px;">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('user-home')
    active
@endsection

@section('scripts')
    <script src="{{ asset('user-assets/search/js/classie.js') }}"></script>
    <script src="{{ asset('user-assets/search/js/uisearch.js') }}"></script>
    <script>
        new UISearch( document.getElementById( 'sb-search' ) );
    </script>
    <!-- checks if any value is present in the search input -->
    <script>

        $(document).ready(
                function(){
                    if($("#search").val() == null || $("#search").val() == "")
                    {
                        return false;
                    }
                    else
                    {
                        $("#sb-search").addClass("sb-search-open");
                        return true;
                    }
                }
        );
    </script>


@endsection
