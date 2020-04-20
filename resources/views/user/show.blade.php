@extends('layout.index')

@section('content')
 <ul>
   <li>{{$showUser->id}}</li>
   <li>{{$showUser->name}}</li>
   <li>{{$showUser->email}}</li>
   @if(isset($showUser->loveMember->nogizakaMember))
    <li>{{$showUser->loveMember->nogizakaMember}}</li>
   @endif
   @if(isset($showUser->loveMember->keyakizakaMember))
    <li>{{$showUser->loveMember->keyakizakaMember}}</li>
   @endif
   @if(isset($showUser->loveMember->hinatazakaMember))
    <li>{{$showUser->loveMember->hinatazakaMember}}</li>
   @endif
 </ul>
@endsection