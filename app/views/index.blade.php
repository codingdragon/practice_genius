@extends('layout')

@section('css')
<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
</style>
@stop

@section('header')

@stop

@section('body')
@if($id)
<div class="container">
    <h3>Select the category to view a post for {{$practices->name}} (ID: #{{ $id }})</h3>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Category & Weight</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    @if($id)
                        <tr class="filters">
                            <th class="col-sm-1"><input type="text" class="form-control" placeholder="Category" disabled></th>
                            <th class="col-sm-1"><input type="text" class="form-control" placeholder="Weight" disabled></th>
                            <th class="col-sm-1"><input type="text" class="form-control" placeholder="Actions" disabled></th>
                        </tr>
                    @endif
                    </thead>
                    <tbody>
                    
                    @if($id)
                        @foreach($practices->categoryWeights as $c)
                        <tr>
                            <td>{{ $c->socialmedia_category()->name }}</td>
                            <td>{{ $c->weight }}</td>
                            <td><a href="/category/{{ $c->category_id }}/weight/{{ $c->weight }}" class="btn btn-info">Select</a></td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <h3>Scheduled posted content for {{$practices->name}} (ID: #{{ $id }})</h3>
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Practice Posted</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        @if($practices->scheduledPosts->isEmpty())
                        <tr><th>There are no items.</tr></th>
                        @else
                        <tr class="filters">
                            <th class="col-sm-1"><input type="text" class="form-control " placeholder="ID" disabled></th>
                            <th class="col-sm-1"><input type="text" class="form-control" placeholder="Weight" disabled></th>
                            <th class="col-sm-1"><input type="text" class="form-control" placeholder="Category" disabled></th>
                            <th class="col-sm-3"><input type="text" class="form-control" placeholder="Title" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Content" disabled></th>
                        </tr>
                        @endif
                    </thead>
                    <tbody>
                        @foreach($practices->scheduledPosts as $p)
                        <?php $weight = SocialmediaCategoryWeight::where('practice_id', '=', $id)->where('category_id', '=', $p->category_id)->first()->weight; ?>
                        <tr>
                            <td><a href="/{{ $id }}">{{ $id }}</a></td>
                            <td><a href="/{{ $id }}/weight/{{$weight}}">{{ $weight }}</a></td>
                            <td>{{ $p->category() }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->content }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif

<div class="container">
    @if($id)
    <h3>Posted content for {{$practices->name}} (ID: #{{ $id }})</h3>
    @else
    <h3>Select ID to view selection.</h3>
    @endif
    <hr>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Practice Posted</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    @if($id)
                        @if($practices->postedPosts->isEmpty())
                        <tr><th>There are no items.</tr></th>
                        @else
                        <tr class="filters">
                            <th class="col-sm-1"><input type="text" class="form-control " placeholder="ID" disabled></th>
                            <th class="col-sm-1"><input type="text" class="form-control" placeholder="Weight" disabled></th>
                            <th class="col-sm-1"><input type="text" class="form-control" placeholder="Category" disabled></th>
                            <th class="col-sm-3"><input type="text" class="form-control" placeholder="Title" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Content" disabled></th>
                        </tr>
                        @endif
                    @else
                        <tr class="filters">
                            <th><input type="text" class="form-control" placeholder="ID" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                            <th><input type="text" class="form-control" placeholder="Website" disabled></th>
                        </tr>
                    @endif
                    </thead>
                    <tbody>
                    
                    @if($id)
                        @foreach($practices->postedPosts as $p)
                        <?php $weight = SocialmediaCategoryWeight::where('practice_id', '=', $id)->where('category_id', '=', $p->category_id)->first()->weight; ?>
                        <tr>
                            <td><a href="/{{ $id }}">{{ $id }}</a></td>
                            <td><a href="/{{ $id }}/weight/{{$weight}}">{{ $weight }}</a></td>
                            <td>{{ $p->category() }}</td>
                            <td>{{ $p->title }}</td>
                            <td>{{ $p->content }}</td>
                        </tr>
                        @endforeach
                    
                    @else
                        @foreach($practices as $p)
                        <tr>
                            <td><a href="/{{ $p->id }}">{{ $p->id }}</a></td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->website }}</td>
                        </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')

@stop

@section('js')
@parent
<script type="text/javascript">

$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
@stop