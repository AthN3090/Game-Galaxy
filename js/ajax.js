   var count=0,async_count=0;
   function ajaxCall(){ ///game display
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
            del.setAttribute("onclick","sendGame(this.id);");
            del.className='delete'; 
            del.value="Delete";
            game.appendChild(title);
            formContainer.appendChild(del);
            game.appendChild(formContainer);
            
            var container = document.getElementById('game_container');
            container.appendChild(game);
            }
     }
     http.open("GET","../php/game_display.php?q="+count,"true");
     http.send();



}
function sendGame(game_id){ //send the name of the game to the php through ajax for deletion
   if(confirm("Are yu sure want to delete this game ?")){
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