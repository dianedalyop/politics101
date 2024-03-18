@extends('layouts.app')

@section('content')
   <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    An Honest Politician Is an Oxymoron!
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="slidebody">
        <div class="container">
            <div class="slider-wrapper">
                <button id="previous-slide" class="slide-button material-symbols-outlined">arrow_back</button>
                <div class="image-list">
                     <div class="image-item">
                     <img src="https://i.pinimg.com/564x/08/fb/d8/08fbd8eb35ded2e8f17930b5e979017c.jpg" alt="alternatetext"/> 
                     <p>Content</p>
                       </div>
                       <div class="image-item">
                        <img src="https://i.pinimg.com/564x/08/fb/d8/08fbd8eb35ded2e8f17930b5e979017c.jpg" alt="alternatetext"/> 
                        <p>Content</p>
                       </div>
                       <div class="image-item">
                        <img src="https://i.pinimg.com/564x/08/fb/d8/08fbd8eb35ded2e8f17930b5e979017c.jpg" alt="alternatetext"/> 
                        <p>Content</p>
                       </div>
                       <div class="image-item">
                        <img src="https://i.pinimg.com/564x/08/fb/d8/08fbd8eb35ded2e8f17930b5e979017c.jpg" alt="alternatetext"/> 
                        <p>Content</p>
                        </div>
                       <div class="image-item">
                        <img src="https://i.pinimg.com/564x/08/fb/d8/08fbd8eb35ded2e8f17930b5e979017c.jpg" alt="alternatetext"/> 
                        <p>Content</p>
                       </div>
                       <div class="image-item">
                        <img src="https://i.pinimg.com/564x/08/fb/d8/08fbd8eb35ded2e8f17930b5e979017c.jpg" alt="alternatetext"/> 
                        <p>Content</p>
                       </div> 
                </div>
                <button id="previous-slide" class="slide-button material-symbols-outlined">arrow_forward</button>
            </div>

            <div class="slider-scrollbar">
                <div class="scrollbar-track">
                    <div class="scrollbar-thumb">

                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div>
        <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
    </div>
    
    
@endsection