@extends('layouts.mainlayout')
@section('title', 'Index')
@section('content')
<table>
<tr>
    <th>Employee Number</th>
    <th>Last Name</th>
    <th>First Name</th>
    <th>Birthday</th>
    <th>Gender</th>
</tr>

@forelse($Employee as $key => $Employee)
    <tr>
        <td>
            <p>{{ $key }}</p>
        </td>
        <td>
            <p>{{  $Employee['lastname'] }}</p>
        </td>
        <td>
            <p>{{  $Employee['firstname'] }}</p>
        </td>
        <td>
            <p>{{  $Employee['birthday'] }}</p>
        </td>
        <td>
            <p>{{  $Employee['gender'] }}</p>
        </td>
        <td>
        <form action="<?php echo $key ?>/destroy" method="POST">
        @csrf
        <input type="hidden" name="name" value= <?php echo $key ?>>
        <input type="submit" name="submit" onclick="return confirm('Are you sure you want to delete <?php echo $key ?>?')" value="Delete">
        </form>
        </td>
        <td>
    </tr>

@empty
    <h1>No Data!</h1>
@endforelse

</table>
@endsection