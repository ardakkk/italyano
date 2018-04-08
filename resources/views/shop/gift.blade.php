@extends('layouts.master')
@section('title')
    Колеса Фортуны 
@endsection
@section('links')
<link rel="stylesheet" href="{{URL::to('/css/app.css')}}">
@endsection
@section('content')
    <div id="chart"></div>
    <div class="list-of-gifts">
        <ul>
            <li>№1 <span>Coca-Cola 2 л</span></li>
            <li>№2 <span>Sprite 1 л</span></li>
            <li>№3 <span>Пицца Маргарита</span></li>
            <li>№4 <span>Салад Курины</span></li>
            <li>№5 <span>Пицца Мега Пепперони + Салад Гречиский + Coca-Cola 1л</span></li>
            <li>№6 <span>1500 тг бонус</span></li>
        </ul>
    </div>
    {{-- Popup for take the gift --}}
    <div class="remodal signup-popup" data-remodal-id="gift" data-remodal-options="hashTracking: false, closeOnOutsideClick: false">
        <div class="remodal-content">
            <h1>Вы выграли, <span id="gift"></span>!</h1>
            <button class="fast-btn take-btn">Получить подарок</button>
        </div>
    </div>

    <script src="https://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        var padding = {top:20, right:40, bottom:0, left:0},
            w = 500 - padding.left - padding.right,
            h = 500 - padding.top  - padding.bottom,
            r = Math.min(w, h)/2,
            rotation = 0,
            oldrotation = 0,
            picked = 100000,
            oldpick = [],
            color = d3.scale.category20();//category20c()
            //randomNumbers = getRandomNumbers();

        //http://osric.com/bingo-card-generator/?title=HTML+and+CSS+BINGO!&words=padding%2Cfont-family%2Ccolor%2Cfont-weight%2Cfont-size%2Cbackground-color%2Cnesting%2Cbottom%2Csans-serif%2Cperiod%2Cpound+sign%2C%EF%B9%A4body%EF%B9%A5%2C%EF%B9%A4ul%EF%B9%A5%2C%EF%B9%A4h1%EF%B9%A5%2Cmargin%2C%3C++%3E%2C{+}%2C%EF%B9%A4p%EF%B9%A5%2C%EF%B9%A4!DOCTYPE+html%EF%B9%A5%2C%EF%B9%A4head%EF%B9%A5%2Ccolon%2C%EF%B9%A4style%EF%B9%A5%2C.html%2CHTML%2CCSS%2CJavaScript%2Cborder&freespace=true&freespaceValue=Web+Design+Master&freespaceRandom=false&width=5&height=5&number=35#results

        var data = [
                    {"label":"№1",  "value":1,  "question":"Coca-Cola 2 л"}, // padding
                    {"label":"№2",  "value":1,  "question":"Sprite 1 л"}, //font-family
                    {"label":"№3",  "value":1,  "question":"Пицца Маргарита"}, //color
                    {"label":"№4",  "value":1,  "question":"Салад Курины"}, //font-weight
                    {"label":"№5",  "value":1,  "question":"Пицца Мега Пепперони + Салад Гречиский + Coca-Cola 1л"}, //font-size
                    {"label":"№6",  "value":1,  "question":"1500 тг бону"}, //background-color
        ];


        var svg = d3.select('#chart')
            .append("svg")
            .data([data])
            .attr("width",  w + padding.left + padding.right)
            .attr("height", h + padding.top + padding.bottom);

        var container = svg.append("g")
            .attr("class", "chartholder")
            .attr("transform", "translate(" + (w/2 + padding.left) + "," + (h/2 + padding.top) + ")");

        var vis = container
            .append("g");
            
        var pie = d3.layout.pie().sort(null).value(function(d){return 1;});

        // declare an arc generator function
        var arc = d3.svg.arc().outerRadius(r);

        // select paths, use arc generator to draw
        var arcs = vis.selectAll("g.slice")
            .data(pie)
            .enter()
            .append("g")
            .attr("class", "slice");
            

        arcs.append("path")
            .attr("fill", function(d, i){ return color(i); })
            .attr("d", function (d) { return arc(d); });
        // add the text
        arcs.append("text").attr("transform", function(d){
                d.innerRadius = 0;
                d.outerRadius = r;
                d.angle = (d.startAngle + d.endAngle)/2;
                return "rotate(" + (d.angle * 180 / Math.PI - 90) + ")translate(" + (d.outerRadius -10) +")";
            })
            .attr("text-anchor", "end")
            .text( function(d, i) {
                return data[i].label;
            });

        container.on("click", spin);


        function spin(d){
            
            container.on("click", null);

            //all slices have been seen, all done
            console.log("OldPick: " + oldpick.length, "Data length: " + data.length);
            if(oldpick.length == data.length){
                console.log("done");
                container.on("click", null);
                return;
            }

            var  ps       = 360/data.length,
                 pieslice = Math.round(1440/data.length),
                 rng      = Math.floor((Math.random() * 1440) + 360);
                
            rotation = (Math.round(rng / ps) * ps);
            
            picked = Math.round(data.length - (rotation % 360)/ps);
            picked = picked >= data.length ? (picked % data.length) : picked;


            if(oldpick.indexOf(picked) !== -1){
                d3.select(this).call(spin);
                return;
            } else {
                oldpick.push(picked);
            }

            rotation += 90 - Math.round(ps/2);

            vis.transition()
                .duration(3000)
                .attrTween("transform", rotTween)
                .each("end", function(){

                    //mark question as seen
                    d3.select(".slice:nth-child(" + (picked + 1) + ") path")
                        .attr("fill", "#111");

                    //populate question
                    var inst = $('[data-remodal-id=gift]').remodal();
                    inst.open();
                    d3.select("#gift")
                        .text(data[picked].question);
                    

                    oldrotation = rotation;
                
                    container.on("click", spin);
                });
        }

        //make arrow
        svg.append("g")
            .attr("transform", "translate(" + (w + padding.left + padding.right) + "," + ((h/2)+padding.top) + ")")
            .append("path")
            .attr("d", "M-" + (r*.15) + ",0L0," + (r*.05) + "L0,-" + (r*.05) + "Z")
            .style({"fill":"black"});

        //draw spin circle
        container.append("circle")
            .attr("cx", 0)
            .attr("cy", 0)
            .attr("r", 60)
            .style({"fill":"white","cursor":"pointer"});

        //spin text
        container.append("text")
            .attr("x", 0)
            .attr("y", 15)
            .attr("text-anchor", "middle")
            .text("Крути")
            .style({"font-weight":"bold", "font-size":"30px"});
        
        
        function rotTween(to) {
          var i = d3.interpolate(oldrotation % 360, rotation);
          return function(t) {
            return "rotate(" + i(t) + ")";
          };
        }
        
        
        function getRandomNumbers(){
            var array = new Uint16Array(1000);
            var scale = d3.scale.linear().range([360, 1440]).domain([0, 100000]);

            if(window.hasOwnProperty("crypto") && typeof window.crypto.getRandomValues === "function"){
                window.crypto.getRandomValues(array);
                console.log("works");
            } else {
                //no support for crypto, get crappy random numbers
                for(var i=0; i < 1000; i++){
                    array[i] = Math.floor(Math.random() * 100000) + 1;
                }
            }

            return array;
        }
    </script>
@endsection
@section('scripts')
<script>
  	var token = '{{Session::token() }}';
    console.log(token);
    var takeBtn = $('.take-btn');
    takeBtn.click(function(){
       var gift = document.getElementById('gift').textContent;
       $.ajax({
          type: 'POST',
          url:'/user/gift',
          typeData: 'JSON',
          data: {gift: gift, _token: token},
          success: function(res){
              console.log(res);
          } 
       });
    });
</script>
@endsection