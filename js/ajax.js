   var count=0,async_count=0;
   function admin_list_games(){ ///game display
    count++;
    var http = new XMLHttpRequest();
     
     http.onreadystatechange = function(){
         if(http.readyState == 4 && http.status == 200){
            async_count++;
            var game = document.createElement('div');
            game.className='game';
            var title = document.createElement('div');
            title.className='title';
            title.id=async_count;
            title.innerHTML=http.responseText;
            var formContainer=document.createElement('div');
            formContainer.className='option';
            var del = document.createElement('button');
            del.setAttribute("id",async_count);
            del.innerHTML="Delete";
            del.setAttribute("onclick","deleteGame(this.id);");
            del.className='delete'; 
            del.value="Delete";
            game.appendChild(title);
            formContainer.appendChild(del);
            game.appendChild(formContainer);
            
            var container = document.getElementById('game_container');
            container.appendChild(game);
            }
     }
     http.open("GET","../php/game_display_admin.php?q="+count,"true");
     http.send();



}
function deleteGame(game_id){ //send the name of the game to the php through ajax for deletion
   if(confirm("Are you sure want to delete this game ?")){
   var getElement = document.getElementsByClassName('title');
   var delTitle = getElement[game_id-1].innerHTML;
   var http = new XMLHttpRequest();
  
http.onreadystatechange = function(){
   if(http.readyState == 4 && http.status==200){
                alert(this.responseText+"   ---deleted successfully !");
                location.reload();
   }
}

http.open("POST","../php/delete_game.php",true);
http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
http.send("index="+delTitle);

   }

}
var count2 = 0;
function display_games_main(){
   var http = new XMLHttpRequest();
   http.onreadystatechange = function(){
      if(http.readyState == 4 && http.status == 200){
         var gameObj = JSON.parse(this.responseText);
         var gameframe = document.createElement('div');
         gameframe.setAttribute("class","game_frame");
         var th = document.createElement('th');
         var a1 =  document.createElement('a');
         a1.setAttribute("href","page_featured_games.php#"+gameObj.id);
         var img = document.createElement('img');
         img.setAttribute("src","img/games/"+ gameObj.image +".png");
         var p = document.createElement('p');
         p.setAttribute("class","info_text");
         p.innerHTML = gameObj.name;
         var a2 = document.createElement('a');
         a2.setAttribute("href","page_featured_games.php#"+gameObj.id);
         a2.setAttribute("class","info_link");
         a2.innerHTML = "More info";
         a1.appendChild(img);
         th.appendChild(a1);
         gameframe.appendChild(th);
         gameframe.appendChild(p);
         gameframe.appendChild(a2);
         
         if(gameObj.tag == "Featured"){
         var frame = document.getElementsByClassName("feat_games");
         var container = frame[0].firstElementChild;
         if(container != undefined)
         container.appendChild(gameframe);
         }else if(gameObj.tag == "Best Sellers"){
            var frame = document.getElementsByClassName("best_sellers");
         var container = frame[0].firstElementChild;
         if(container != undefined)
         container.appendChild(gameframe);
         }else{
            var frame = document.getElementsByClassName("on_sale");
         var container = frame[0].firstElementChild;
         if(container != undefined)
         container.appendChild(gameframe);
         }


      }
   }
   http.open("POST","./php/game_display_main.php",true);
   http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   http.send("index="+count2);
   count2++;

}
var count3 = 0;
function display_games(target){
   var http = new XMLHttpRequest();
   http.onreadystatechange = function(){
      if(http.readyState == 4 && http.status == 200){
         console.log(this.responseText);
         var gameObj = JSON.parse(http.responseText);
         var frame = document.getElementsByClassName('frame'); //static
         var outer = document.createElement('div'); //dynamic
         outer.setAttribute("class","outer"); 
         var p1 = document.createElement('p');
         p1.setAttribute("id","title");
         p1.innerHTML = gameObj.name;
         var wrap_left = document.createElement('div');
         wrap_left.setAttribute("class","wrap_left");
         var video = document.createElement('div');
         video.setAttribute("id","video");
         var iframe = document.createElement('iframe');
         iframe.setAttribute("src",gameObj.video);
         iframe.setAttribute("frameborder","0");
         iframe.setAttribute("allowfullscreen","");
         iframe.setAttribute("allow","autoplay");
         video.appendChild(iframe);
         var p2 = document.createElement('p');
         p2.innerHTML = gameObj.description;
         wrap_left.appendChild(video);
         wrap_left.appendChild(p2);
         outer.appendChild(p1);
         outer.appendChild(wrap_left);
         
         var wrap_right = document.createElement('div');
         wrap_right.setAttribute('class','wrap_right');
         var game_text = document.createElement('div');
         game_text.setAttribute("id","game_text");
         var p3 = document.createElement('p');
         p3.innerHTML ='Price: <span style="font-size:1.6em;">'+gameObj.price+
         '</span><br>Category: '+gameObj.category+'<br>Developer: '+gameObj.developer+'<br>Publisher: '+gameObj.publisher+
         '<br>Release Date: '+gameObj.release+'<br>Platform: '+gameObj.platform;
         game_text.appendChild(p3);

         var game_img = document.createElement('div');
         game_img.setAttribute("id","game_img");
         var img = document.createElement('img');
         img.setAttribute("src","img/games/"+ gameObj.image +".png");
         game_img.appendChild(img);
         var clear = document.createElement('div');
         clear.setAttribute("id","clear");
         game_img.appendChild(clear);
         var platform_wrap = document.createElement('div');
         platform_wrap.setAttribute("class","platform_wrap");
         var p4 = document.createElement('p');
         p4.setAttribute("style","color:white;");
         p4.innerHTML = "Select Platform";
         platform_wrap.appendChild(p4);
         var select = document.createElement('select');
         select.setAttribute("name","os0");
         select.setAttribute("id","platform_choice");
         var platf = gameObj.platform;
         var arr = platf.split(',');
         for(var i=0;i<arr.length;i++){
            var option = document.createElement('option');
            option.setAttribute("value",arr[i]);
            option.innerHTML = arr[i];
            select.appendChild(option);

         }

         platform_wrap.appendChild(select);
         platform_wrap.appendChild(clear);
         var button_left = document.createElement('div');
         button_left.setAttribute("class","button_left");
         var button1 = document.createElement('button');
         button1.setAttribute("id",gameObj.id);
         button1.setAttribute("class","button");
         button1.setAttribute("onclick","add_to_cart(this.id);");
         button1.innerHTML = "Add to Cart";
         button_left.appendChild(button1);
         platform_wrap.appendChild(button_left);
         var button_right = document.createElement('div');
         button_right.setAttribute("class","button_right");
         var button2 = document.createElement('button');
         button2.setAttribute("onclick","location.href = '../SE_PROJECT/user_cart.php'");
         button2.setAttribute("id",gameObj.id);
         button2.setAttribute("class","button");
         button2.innerHTML = "View cart";
         button_right.appendChild(button2);
         platform_wrap.appendChild(button_right);
         platform_wrap.appendChild(clear);
         game_img.appendChild(platform_wrap);
         game_text.appendChild(p3);
         wrap_right.appendChild(game_text);
         wrap_right.appendChild(game_img);
         outer.appendChild(wrap_right);
         outer.appendChild(clear);
         frame[0].appendChild(outer);
         }

   }
   http.open("POST","./php/game_display.php",true);
   http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   http.send("index="+count3+"&target="+target);
   count3++;

}
var count4 = 0;
function display_tagged_games(target){
   var http = new XMLHttpRequest();
   http.onreadystatechange = function(){
      if(http.readyState == 4 && http.status == 200){
         console.log(this.responseText);
         var gameObj = JSON.parse(http.responseText);
         var frame = document.getElementsByClassName('frame'); //static
         var outer = document.createElement('div'); //dynamic
         outer.setAttribute("class","outer"); 
         outer.setAttribute("id",gameObj.id);
         var p1 = document.createElement('p');
         p1.setAttribute("id","title");
         p1.innerHTML = gameObj.name;
         var wrap_left = document.createElement('div');
         wrap_left.setAttribute("class","wrap_left");
         var video = document.createElement('div');
         video.setAttribute("id","video");
         var iframe = document.createElement('iframe');
         iframe.setAttribute("src",gameObj.video);
         iframe.setAttribute("frameborder","0");
         iframe.setAttribute("allowfullscreen","");
         iframe.setAttribute("allow","autoplay");
         video.appendChild(iframe);
         var p2 = document.createElement('p');
         p2.innerHTML = gameObj.description;
         wrap_left.appendChild(video);
         wrap_left.appendChild(p2);
         outer.appendChild(p1);
         outer.appendChild(wrap_left);
         
         var wrap_right = document.createElement('div');
         wrap_right.setAttribute('class','wrap_right');
         var game_text = document.createElement('div');
         game_text.setAttribute("id","game_text");
         var p3 = document.createElement('p');
         p3.innerHTML ='Price: <span style="font-size:1.6em;">'+gameObj.price+
         '</span><br>Category: '+gameObj.category+'<br>Developer: '+gameObj.developer+'<br>Publisher: '+gameObj.publisher+
         '<br>Release Date: '+gameObj.release+'<br>Platform: '+gameObj.platform;
         game_text.appendChild(p3);

         var game_img = document.createElement('div');
         game_img.setAttribute("id","game_img");
         var img = document.createElement('img');
         img.setAttribute("src","img/games/"+ gameObj.image +".png");
         game_img.appendChild(img);
         var clear = document.createElement('div');
         clear.setAttribute("id","clear");
         game_img.appendChild(clear);
         var platform_wrap = document.createElement('div');
         platform_wrap.setAttribute("class","platform_wrap");
         var p4 = document.createElement('p');
         p4.setAttribute("style","color:white;");
         p4.innerHTML = "Select Platform";
         platform_wrap.appendChild(p4);
         var select = document.createElement('select');
         select.setAttribute("name","os0");
         select.setAttribute("id","platform_choice");
         var platf = gameObj.platform;
         var arr = platf.split(',');
         for(var i=0;i<arr.length;i++){
            var option = document.createElement('option');
            option.setAttribute("value",arr[i]);
            option.innerHTML = arr[i];
            select.appendChild(option);

         }

         platform_wrap.appendChild(select);
         platform_wrap.appendChild(clear);
         var button_left = document.createElement('div');
         button_left.setAttribute("class","button_left");
         var button1 = document.createElement('button');
         button1.setAttribute("id", gameObj.id);
         button1.setAttribute("class","button");
         button1.setAttribute("onclick","add_to_cart(this.id);");
         button1.innerHTML = "Add to Cart";
         button_left.appendChild(button1);
         platform_wrap.appendChild(button_left);
         var button_right = document.createElement('div');
         button_right.setAttribute("class","button_right");
         var button2 = document.createElement('button');
         button2.setAttribute("id", gameObj.id);
         button2.setAttribute("onclick","location.href = './user_cart.php'");
         button2.setAttribute("class","button");
         button2.innerHTML = "View cart";
         button_right.appendChild(button2);
         platform_wrap.appendChild(button_right);
         platform_wrap.appendChild(clear);
         game_img.appendChild(platform_wrap);
         game_text.appendChild(p3);
         wrap_right.appendChild(game_text);
         wrap_right.appendChild(game_img);
         outer.appendChild(wrap_right);
         outer.appendChild(clear);
         frame[0].appendChild(outer);
         }

   }
   http.open("POST","./php/tagged_game_display.php",true);
   http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
   http.send("index="+count4+"&target="+target);
   count4++;

}

function usercheck(){ //send the name of the game to the php through ajax for deletion
   
   var http = new XMLHttpRequest();
  
http.onreadystatechange = function(){
   if(http.readyState == 4 && http.status==200){ 
      if(this.responseText==0){
         
      document.getElementById('hidelogout').style.visibility = "hidden";

      }
   }
}

http.open("POST","./php/user_check.php",true);
http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
http.send("user=1");

   }



function add_to_cart(id){
      var game_id = id;
      var http = new XMLHttpRequest();
      http.onreadystatechange = function(){
         if(http.readyState == 4 && http.status == 200){           

            if(this.responseText!=""){
               alert(this.responseText);
            }

         }
      }

      http.open("POST","./php/add_to_cart.php",true);
      http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      http.send("gameid="+game_id);
   }
   function display_cart(id){
      var game_id = id;
      var http = new XMLHttpRequest();
      http.onreadystatechange = function(){
         if(http.readyState == 4 && http.status == 200){           

            console.log(this.responseText);
            var item = JSON.parse(this.responseText);
            var items = document.getElementsByClassName('items');
            var item1 = document.createElement('div');
            item1.setAttribute("class","item1");
            var close1 = document.createElement('div');
            close1.setAttribute("class","close1");
            var alert_close1 = document.createElement('div');
            alert_close1.setAttribute("onclick","remove_item(this.id);");
            alert_close1.setAttribute("class","alert-close1");
            alert_close1.setAttribute("id","--"+item.id);
            var image1 = document.createElement('div');
            image1.setAttribute("class","image1");
            var img = document.createElement('img');
            img.setAttribute("src","./img/games/"+item.image+".png");
            var title1 = document.createElement('div');
            title1.setAttribute("class","title1");
            var p = document.createElement('p');
            p.innerHTML = item.name;
            var quantity1 = document.createElement('div');
            quantity1.setAttribute("class","quantity1");
            var input = document.createElement('input');
            input.setAttribute("id",item.price+"_"+item.id);
            input.setAttribute("type","number");
            input.setAttribute("name","quantity");
            input.setAttribute("onclick","quantity_check(this.id);");
            input.setAttribute("min","1");
            input.setAttribute("max","10");
            input.setAttribute("value","1");
            var price1 = document.createElement('div');
            price1.setAttribute("class","price1");
            var p1 = document.createElement('p');
            p1.setAttribute("class","cost");
            p1.setAttribute("id","01"+item.price+"_"+item.id);
            p1.innerHTML = "Rs "+item.price;
            var clear = document.createElement('div');
            clear.setAttribute("class","clear");
            close1.appendChild(alert_close1);
            image1.appendChild(img);
            close1.appendChild(image1);
            title1.appendChild(p);
            close1.appendChild(title1);
            quantity1.appendChild(input);
            close1.appendChild(quantity1);
            price1.appendChild(p1);
            close1.appendChild(price1);
            close1.appendChild(clear);
            item1.appendChild(close1);
            items[0].appendChild(item1);

         }
      }

      http.open("POST","./php/display_cart.php",true);
      http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      http.send("game_id="+game_id);
   }

   function remove_item(id){
      id = id.replace("--","");
      console.log(id);
      if(confirm("Are you sure want to remove this item form your cart ?")){
         var http = new XMLHttpRequest();
        
      http.onreadystatechange = function(){
         if(http.readyState == 4 && http.status==200){
                      alert("Item removed successfully !");
                      location.reload();
         }
      }
      
      http.open("POST","./php/remove_item.php",true);
      http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      http.send("id="+id);
      
         }

      }