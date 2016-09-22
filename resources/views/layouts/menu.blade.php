@extends('layouts.master')

@section('body-content')

<div class="ui top attached demo menu">
      <a class="item">
        <i class="sidebar icon"></i>
        Menu
      </a>
      <a class="item">
        About Us
      </a>
      <a class="item">
        Jobs
      </a>
      <a class="item">
        Locations
      </a>
    </div>
    <div class="ui bottom attached segment pushable">
      <div class="ui inverted labeled icon left inline vertical sidebar menu">
        <a class="item">
          <i class="home icon"></i>
          Home
        </a>
        <a class="item">
          <i class="block layout icon"></i>
          Topics
        </a>
        <a class="item">
          <i class="smile icon"></i>
          Friends
        </a>
        <a class="item">
          <i class="calendar icon"></i>
          History
        </a>
      </div>
      <div class="pusher">
      @yield('actual-content')
      </div>