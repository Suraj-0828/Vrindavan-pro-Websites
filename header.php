 <!-- Header start -->
 <header id="sticky-header" id="home" class="relative bg-[#E8F1FF] lg:py-[20px] z-10 secondary-sticky secondary-sticky" style="z-index: 2000;">
     <div class="container">
         <div class="grid grid-cols-12">
             <div class="col-span-12">
                 <div class="flex flex-wrap items-center justify-between">
                     <a href="https://dhartidevelopers.co.in/vrindavan" class="block">
                         <img class="w-full h-full" src="assets/images/logoo/logo.png" loading="lazy" width="99" height="46" alt="brand logo">
                     </a>
                     <nav class="flex flex-wrap items-center">
                         <ul class="hidden lg:flex mr-[-35px] mb-[-15px] flex-wrap items-center font-lora text-[16px] xl:text-[18px] leading-none color-text">
                             <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                 <a href="#home" style="font-size: 20px;" class="color-text transition-all text-black ">Home</a>


                             </li>
                             <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                 <a href="#about" style="font-size: 20px;" class="color-text transition-all text-black ">About us</a>



                             </li>
                             <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                 <a href="#amenities" style="font-size: 20px;" class="color-text transition-all text-black ">Amenities</a>

                             </li>

                             <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                 <a href="#nearby" style="font-size: 20px;" class="color-text transition-all text-black ">Near by</a>


                             </li>
                             <li class="mr-7 xl:mr-[40px] relative group py-[20px]">

                                 <a href="#contact" style="font-size: 20px;" class="color-text transition-all text-black ">Contact us</a>

                             </li>
                             <li class="mr-7 xl:mr-[40px] relative group py-[20px]">
                                 <a href="tel:919099909968" style="font-size: 20px;" class="color-text btn btn-warning custom-button transition-all"><i class="fa-sharp fa-solid fa-phone-volume"></i>&nbsp; +91-9099-9099-68</a>
                                 
                             </li>
                         </ul>

                         <ul class="flex flex-wrap items-center">

                             <!-- important for navigatio part -->
                             <li class="ml-2 sm:ml-5 lg:hidden">
                                 <a href="#offcanvas-mobile-menu" class="offcanvas-toggle flex text-[#016450] hover:text-secondary">
                                     <svg width="24" height="24" class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                         <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                                     </svg>
                                 </a>
                             </li>
                             <!-- important for navigatio part -->
                         </ul>
                     </nav>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- offcanvas-overlay start -->
 <div class="offcanvas-overlay hidden fixed inset-0 bg-black opacity-50 z-50" style="z-index: 2000;"></div>
 <!-- offcanvas-overlay end -->
 <!-- offcanvas-mobile-menu start -->
 <div style="z-index: 2000;" id="offcanvas-mobile-menu" class="offcanvas left-0 transform -translate-x-full fixed font-normal text-sm top-0 z-50 h-screen xs:w-[300px] lg:w-[380px] transition-all ease-in-out duration-300 bg-white">

     <div class="py-12 pr-5 h-[100vh] overflow-y-auto">
         <img class="mr-auto" style="justify-content: center; margin: 0px 0px 15px 15px;" src="assets/images/logoo/logo.png">
         <!-- close button start -->
         <button class="offcanvas-close text-black text-[25px] w-10 h-10 absolute right-0 top-0 z-[1]" aria-label="offcanvas">x</button>
         <!-- close button end -->

         <!-- offcanvas-menu start -->

         <nav class="offcanvas-menu mr-[20px]">
             <ul>
                 <li class="relative block border-b-black border-b first:border-t first:border-t-black">
                     <a href="#home" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Home</a>

                 </li>
                 <li class="relative block border-b-primary border-b">
                     <a href="#about" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">About
                         us</a>


                 </li>
                 <li class="relative block border-b-primary border-b">
                     <a href="#amenities" class="block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Amenities</a>

                 </li>
                 <li class="relative block border-b-primary border-b"><a href="#nearby" class="relative block capitalize font-normal text-black hover:text-secondary text-base my-2 py-1 px-5">Near
                         by</a>
                 </li>

                 <li class="relative block border-b-primary border-b"><a href="#contact" class="relative block capitalize text-black hover:text-secondary text-base my-2 py-1 px-5">Contact us</a>
                 </li>
             </ul>
         </nav>
         <!-- offcanvas-menu end -->


     </div>
 </div>
 <!-- offcanvas-mobile-menu end -->
 <!-- Header end -->