
<style>
         .marquee-wrapper{
  background:#2F394C;
  text-align:center;
}
.marquee-wrapper .container{
  overflow:hidden;
}
.marquee-inner span{
  float:left;
  width:50%;
}
.marquee-wrapper .marquee-block{
  --total-marquee-items:5;
  height: 150px;
  width: calc(250px * (var(--total-marquee-items)));
  overflow: hidden;
  box-sizing: border-box;
  position: relative;
  margin: 20px auto;
  background:#1B2531;
  padding: 30px 0;
}
.marquee-inner{
  display: block;
  width: 200%;
  position: absolute;
}
.marquee-inner p{
  font-weight: 800;
  font-size: 30px;
  font-family: cursive;
}
.marquee-inner.to-left{
  animation: marqueeLeft 25s linear infinite;
}
.marquee-inner.to-right{
  animation: marqueeRight 25s linear infinite;
}
.marquee-item{
  width: 230px;
  height: auto;
  display: inline-block;
  margin: 0 10px;
  float: left;
  transition: all .2s ease-out;
  background:#00cc00;
}
@keyframes marqueeLeft{
  0% {
    left: 0;
  }
  100% {
    left: -100%;
  }
}
@keyframes marqueeRight{
  0% { 
    left: -100%; 
  }
  100% {
   left: 0; 
  }
}
</style>


<div class="max-w-screen-xl px-4 py-3 mx-auto overflow-x-auto ">
            <div class="flex items-center my-2">
                <ul class="flex flex-row font-medium mt-0 space-x-4 rtl:space-x-reverse text-sm">
                    <li>
                        <!-- <a href="formcsc.php"  class="text-gray-900 p-2 rounded bg-[#232343] hover:underline whitespace-nowrap border border-green-400  text-white ">🚀 Enquiry(हमसे जुड़े)</a> -->

                        <!-- <div class="flex flex-col items-center justify-center  p-2"> -->
                    <a href="https://bharatcschub.online/formcsc" class="text-white -mt-2  p-2 bg-blue-500 hover:bg-blue-700 border rounded-xl shadow px-4 py-2 inline-flex items-center">
                    <span class="mr-2">👉</span> 
                    <span>हमसे जुड़े</span>
                    </a>
                <!-- </div> -->

                    </li>

                    <li>
                        <a href="otherservices.php" class="text-gray-900 p-2 rounded hover:underline whitespace-nowrap border border-blue-400 ">🛠️OtherSerivces</a>
                    </li>

                  
                    <!-- <li>
                        <a href="https://mart.bharatcschub.online" target="_blank" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-pink-400 bg-[#232343] text-white  hover:bg-blue-800 ">🌐 Hub</a>
                    </li> -->

                    <li>
                        <a href="partnership.php" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-red-400 ">🤝Partnership</a>
                    </li>
                    <li>
                        <a href="personalmeet.php" class="text-gray-900 p-2 rounded  hover:underline whitespace-nowrap border border-yellow-400 ">🗣️ PersonalMeet</a>
                    </li>

                  

                   


                </ul>
            </div>
        </div>



        <div class="flex flex-col items-center p-6 bg-blue-100">
  <h1 class="text-2xl font-extrabold text-center mb-1 animate-bounce text-white  bg-green-800 p-2 rounded-lg shadow-lg">
    भारत की नंबर - 1 वेबसाइट में आपका स्वागत है! 🌟
  </h1>
  <p class="text-2xl font-semibold text-center mb-2 text-green-600">
    4200+ <span class="font-extrabold text-black">जन सेवा केंद्र</span> और 6000+ <span class="font-extrabold text-black">छोटे-बड़े व्यवसायी</span> हमारे साथ हैं। 🚀
  </p>
  
  <p class="text-lg text-center text-gray-700">
    अगर आपने <strong class="text-blue-500">भारत CSC हब</strong> वेबसाइट पर रजिस्ट्रेशन किया है, तो कृपया <strong class="text-red-500">कॉल न करें। 📞</strong>
    हमारी टीम <strong class="font-bold">2-3 घंटे</strong> में आपसे संपर्क करेगी! ⏳ सिर्फ <strong class="text-green-500">व्हाट्सएप</strong> का उपयोग करें। धन्यवाद! 🙏✨
  </p>
</div>



 