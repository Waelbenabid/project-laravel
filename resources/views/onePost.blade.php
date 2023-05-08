@extends('layouts.onePost')


<h1>This is One Post page</h1>





@section('fofofo')
  <!-- Container -->
  <div class="container mt-32 mx-auto p-4 md:p-0">

    <!-- Card wrapper -->
    <div class="shadow-lg flex flex-wrap w-full lg:w-4/5 mx-auto">

        <!-- Card image -->
        <div class="bg-cover bg-bottom border w-full md:w-1/3 h-64 md:h-auto relative"
            style="background-image:url('https://images7.alphacoders.com/347/347549.jpg')">
            <div class="absolute text-xl">
                <i class="fa fa-heart text-white hover:text-red-light ml-4 mt-4 cursor-pointer"></i>
            </div>
        </div>
        <!-- ./Card image -->

        <!-- Card body -->
        <div class="bg-white w-full md:w-2/3">
            <!-- Card body - outer wrapper -->
            <div class="h-full mx-auto px-6 md:px-0 md:pt-6 md:-ml-6 relative">
                <!-- Card body - inner wrapper -->
                <div
                    class="bg-white lg:h-full p-6 -mt-6 md:mt-0 relative mb-4 md:mb-0 flex flex-wrap md:flex-wrap items-center">
                    <!-- Card title and subtitle -->
                    <div class="w-full lg:w-1/5 lg:border-right lg:border-solid text-center md:text-left">
                        <h3>Saint Basil's Cathedral</h3>
                        <p class="mb-0 mt-3 text-grey-dark text-sm italic">Moscow - Russia</p>
                        <hr class="w-1/4 md:ml-0 mt-4  border lg:hidden">
                    </div>
                    <!-- ./Card title and subtitle -->

                    <!-- Card description -->
                    <div class="w-full lg:w-3/5 lg:px-3">
                        <p class="text-md mt-4 lg:mt-0 text-justify md:text-left text-sm">
                           
                        </p>
                    </div>
                    <!-- ./Card description -->

                    <!-- Call to action button -->
                    <div class="w-full lg:w-1/5 mt-6 lg:mt-0 lg:px-4 text-center md:text-left">
                        <button
                            class="bg-white hover:bg-grey-darker hover:text-white border border-solid border-grey w-1/3 lg:w-full py-2">Visit
                            now</button>
                    </div>
                    <!-- ./Call to action button -->
                </div>
                <!-- ./Card body - inner wrapper -->
            </div>
            <!-- ./Card body - outer wrapper -->
        </div>
        <!-- ./Card body -->
    </div>
    <!-- ./Card wrapper -->
</div>
<!-- ./Container -->
  
@endsection
