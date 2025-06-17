<x-app-layout>
    <div class="container mx-auto px-4 py-8 relative  min-h-screen ">
        <img src="{{ asset('images/name-hero.png') }}" alt="Home Banner" class=" object-cover rounded-lg my-8">

        <div class="flex flex-row gap-4 my-20 relative">
            <div class="flex flex-col">
                <h1>
                    <span class="text-4xl font-bold text-[#0CA5FF]">
                        Cyber Rian
                    </span>
                    <span class="text-4xl font-bold text-white">
                        — "แพลตฟอร์มเรียนรู้
                    </span>
                    <span class="text-4xl font-bold text-[#0CA5FF]">
                        Cyber Security
                    </span>
                    <span class="text-4xl font-bold text-white">
                        สำหรับทุกคน"
                    </span>
                </h1>
                <div class="  my-10">
                    <div class="w-1/3 border-2 border-[#0CA5FF]"></div>
                    <p class="text-3xl text-white  w-full tracking-wider leading-loose my-6 ">
                        เพราะ ความเสี่ยงไซเบอร์ <span class="text-[#0CA5FF]">“ เกิดได้กับทุกคน ”
                        </span>ไม่ว่าคุณจะเป็นใคร<br /> ทำงานสายไหน หรือ คนที่ใช้เทคโนโลยีในชีวิตประจำวัน คุณก็อาจ<br />
                        ตกเป็น <span class="text-[#0CA5FF]">เป้าหมาย </span> ของภัยคุกคามทางไซเบอร์ <span
                            class="text-[#0CA5FF]">ได้ทุกเมื่อ</span>
                    </p>
                    <div class="w-2/3 bg-gradient-to-r from-[#0E57C7] to-[#049EF9] h-1 mt-4 rounded-full"></div>
                </div>


            </div>

            <div class="absolute right-0 -bottom-10">
                <div class="relative w-[450px]"> <!-- ปรับขนาดตามต้องการ -->
                    <img src="{{ asset('images/cyberrian-hero.png') }}" alt="Home Banner"
                        class="w-full object-cover rounded-lg" />
                    <!-- เส้นใต้สีขาว หนา 2px -->
                    <div class="absolute bottom-0 left-0 w-full h-2 rounded-full bg-white"></div>
                </div>
            </div>
        </div>


        <div class="flex flex-row justify-between items-center">
            <div class="w-1/2 flex flex-row gap-4">
                <button class=" bg-gradient-to-r from-[#1F4DE5] to-[#00A1FF] rounded-3xl w-1/2 py-4 text-white text-xl">
                    เริ่มกับน้องไซ !
                </button>
                <button class=" bg-white rounded-3xl w-1/2 py-4 text-[#0C2E78] text-xl">
                    เพิ่มเติม v
                </button>
            </div>
            <div class="flex flex-col items-end">
                <h1 class="text-[#0CA5FF] text-2xl">มาเรียนรู้เรื่อง Cyber ไปกับน้องไซ!</h1>
                <p class="text-white text-lg">
                    ป้องกันความเสี่ยงให้ตัวคุณเอง ทีมคุณ และองค์กรของคุณ — วันนี้!
                </p>
            </div>

        </div>

    </div>
</x-app-layout>