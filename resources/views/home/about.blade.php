@extends('layouts.app')
@section('title')
    About
@endsection
@section('content')

    <div class="container-fluid">
        <p class="indicateNav shadow-sm" style="margin:1% 7%;"><a class="text-muted" href="{{ url('/')  }}"> Home</a> > About</p>

        <section style="width:auto;height:auto;background-color:rgba(234,234,234,0.7);margin:2% 15%;border-radius:5px;padding:30px 1%;">
            <h1 class="text-center">Quality Souvenir</h1>
            <h2 class="text-center font-italic">--Kiwis' favorite gift shop!</h2>
            <div class="card align-item-center">
                <img class="card-img-top rounded img-thumbnail mx-auto" src="{{ asset('images/main/aboutpage.jpg') }}" alt="maori history">
                <div class="card-body">
                    <p class="card-text text-center">It carries the history and culture of gross profit</p>
                </div>
            </div><br />
            <div class="text-center">
                <h3>Here's the history of Quality Souvenir:</h3>
                <ul style="text-align:left;padding:0 15%;">
                    <li><strong>1998</strong> - We created our first local specialty store in New Zealand. The unique Maori products not only carry the historical memories of the locals, but also allow visitors to remember the history of New Zealand."</li>
                    <li><strong>2004</strong> - Located in the heart of Auckland, it receives thousands of visitors every day, and its store has expanded and is known by local media as New Zealand's most distinctive souvenir shop.</li>
                    <li><strong>2010</strong> - In addition to the most distinctive local Maori souvenirs, I also introduced daily necessities with New Zealand logos, such as mugs, T-shirts, and some furniture items, and later became one of the favorite shops for locals, so we were in the South Island. Opened a second branch.</li>
                    <li><strong>2015</strong> - The e-commerce era has arrived, people are no longer satisfied with on-the-spot shopping, so our online shopping site is online, and people who have access to the Internet can enjoy browsing, and we provide global delivery. Even if you are not in New Zealand, you can browse the most unique products in the area.</li>
                    <li><strong>2018</strong> - Up to now, Quality souvenir has about 50 employees and three stores across New Zealand. We hope to discover more New Zealand-specific products, not only for visitors from afar, but also for locals to experience the history of New Zealand.</li>
                </ul>
            </div>
            <p style="text-align:left;padding:0 20%;font-size:22px;font-weight: 200;">"Quality Souvenir is a unique company that, unlike the flowering gift shop, offers products that are both refined and unique, not just for use. Each of its products has a special meaning, you can always find the imprint of New Zealand's history. Many people buy it not for use, but for display, because it carries the history of New Zealand, which is hard to come by."</p>
            <p style="text-align:right;padding:0 20%" class="font-italic text-muted">--By Mumu</p>
            <h3 class="text-center">Back to <a class="text-muted" href="{{ url('/index')  }}"><i class="fa fa-gift"></i> home</a> page</h3>
        </section>
    </div>
@endsection