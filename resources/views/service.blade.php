<h1>Welcome to Service Page</h1>

<h2>Service ID: {{$id}}</h2>
<h2>Category ID: <?php echo $cat; ?></h2>

@if($id>10)
<?php echo "Id is greater than 10"; ?>
@endif

{{$data['username']}}

<?php echo $data['contact']; ?>

@foreach($arr as $ar)
{{$ar}}
@endforeach

@include('common.links')