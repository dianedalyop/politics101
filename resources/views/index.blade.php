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
                        <img src="https://www.politico.com/dims4/default/6a514e4/2147483647/strip/true/crop/1160x773+0+0/resize/1290x860!/format/webp/quality/90/?url=https%3A%2F%2Fstatic.politico.com%2F4e%2Fba%2F6628199446ed91c41e4fb8296a37%2F200819-biden-getty-773.jpg" alt="alternatetext"/> 
                        <div class="latest-content">
                        <a href="https://edition.cnn.com/2024/03/10/politics/joe-biden-sotu-what-matters/index.html">
                            A forceful Biden hits the road as Republicans keep focus on his age and memory
                        </a>
                       </div>
                       </div>
                       <div class="image-item">
                        <img src="https://media.cnn.com/api/v1/images/stellar/prod/20240317-march-madness-split.jpg?c=16x9&q=h_438,w_780,c_fill" alt="alternatetext"/> 
                        <div class="latest-content">
                            <a href="https://edition.cnn.com/sport/us-sports">
                                March Madness: Here are the top seeds for the men’s and women’s NCAA basketball tournament
                            </a>
                           </div>
                       </div>
                       <div class="image-item">
                        <img src="https://img.rasset.ie/001fe98f-800.jpg" alt="alternatetext"/> 
                        <div class="latest-content">
                            <a href="https://www.rte.ie/news/uk/2024/0315/1437996-chewing-gum-lateral-flow-tests/">
                                UK university creates antigen tests from used chewing gum
                            </a>
                           </div>
                        </div>
                       <div class="image-item">
                        <img src="https://img.businessoffashion.com/resizer/OOWt851W0uKz8zgM2o9ZgIPBFqU=/1440x0/filters:format(jpg):quality(70)/cloudfront-eu-central-1.images.arcpublishing.com/businessoffashion/IFVI2CJLBZH6LJO52V5XX74IVQ.jpg" alt="alternatetext"/> 
                        <div class="latest-content">
                            <a href="https://www.businessoffashion.com/news/sustainability/eu-backs-supply-chain-audit-law-after-italy-switches-sides/">
                                EU Backs Supply Chain Audit Law After Italy Switches Sides
                            </a>
                           </div>
                       </div>
                       <div class="image-item">
                        <img src="https://www.apa.org/images/misinformation-disinformation-tile_tcm7-306919_w1024_n.jpg" alt="alternatetext"/> 
                        <div class="latest-content">
                            <a href="https://www.theguardian.com/books/2024/mar/16/attack-from-within-book-dangers-of-disinformation">
                                a worrying new book explores the danger of disinformation
                            </a>
                           </div>
                       </div> 
                </div>
                <button id="next-slide" class="slide-button material-symbols-outlined">arrow_forward</button>
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