@extends('layouts.master');
@section('content')
    <h1> Welcome to TODOParrot!</h1>
   <!--  {{-- Output the $name variable --}}
    <p>{{ $name}} -->
    	You last visited {{ $name }} on {{ $date }}
    	<br/>
    	Welcome,{{$name or 'California'}} 
    <ul>
    	 @foreach ($lists as $list)
    	<li>{{ $list }}</li>
    	@endforeach 
    </ul>
    <ul>
        @forelse ($lists as $list)
        <li>{{ $list }}</li>
        @empty
        <li>You don't have any lists saved. </li>
        @endforelse
    </ul> 
    <ul>
        @if(count($lists)>0)
        @foreach ($lists as $list)
        <li>{{ $list }}<li>
        @endforeach
        @else
        <li>You don't have any lists saved </li>
        @endif
    </ul>  
    @if(count($lists)>1)
    <ul>
        @foreach($lists as $list)
        <li>{{$list}}</li>
        @endforeach
    </ul>
    @elseif (count($lists)==1)
    <p>You have one list:{{$list}}</p>
    @else
    <p>You don't have any lists saved</p>
    @endif
</ul>
<table class="table borderless">
    @foreach($lists as $list)
    @include('partials.row',array('list'=>$list));
    @endforeach
</table>
@endsection
@section('advertisement')
@parent
<p>Buy the TODO Parrot Productivity guide</p>
@endsection