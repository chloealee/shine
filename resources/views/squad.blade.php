@extends('layouts.master')

@section('page-css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet" type="text/css" >
@endsection

@section('content')
@include('layouts.navbar-subpage')

<div class="page">
<h1>SHINE SQUAD</h1>

<h2>Tell me more about the Shine Squad</h2>
<p>We started Shine to empower people to be their best selves at work and in life (and everything in between - we know how it is). We know we all need a little help to get through the day, and we’re honored to play a positive role to help you get there.</p>
<p>As a Shine Squad member you’re part of that big picture mission - you’ll help spread the love by sharing Shine with friends, connecting with us (the co-founders, heyyyy) for major initiatives, give valuable feedback, and ultimately help spread Shine to as many people as possible to make their day brighter.</p>

<h2>What do I do?</h2>
<ul>
<li>Share Shine with friends, family, co-workers, you name it</li>
<li>Participate in the Shine Squad Facebook group for feedback, product insight, surveys, and to make Shine as awesome as it can be</li>
<li>Organize Wine & Shine nights in your local area to help elevate important convos, and bring the Shine community together offline</li>
</ul>

<h2>What do I get</h2>
<ul>
<li>First access to updates from Shine -- early feedback on products, news from the co-founders (us, hi!), and more</li>
<li>S to the W to the A to the G</li>
<li>That social media love. We’ll be shouting out our awesome Shiners from Shine’s social media accounts to show the love.</li>
</ul>

<h2>How do I get started?</h2>
<p><a href="https://docs.google.com/a/shinetext.com/forms/d/191UldIVRyQOILiBdU1cj9xcZ5LBxuWt2V5xL_KWy0sg/viewform" target="_blank">Fill out your info here</a>.  Have questions? Email us at <a href="mailto:shiners@shinetext.com" target="_blank">shiners@shinetext.com</a>.</p>
</div>
@endsection