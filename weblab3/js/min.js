
      //     .--'''''''''--.
      //   .'      .---.      '.
      //  /    .-----------.    \
      // /        .-----.        \
      // |       .-.   .-.       |
      // |      /   \ /   \      |
      //  \    | .-. | .-. |    /
      //   '-._| | | | | | |_.-'
      //       | '-' | '-' |
      //        \___/ \___/
      //     _.-'  /   \  `-._
      //   .' _.--|     |--._ '.
      //   ' _...-|     |-..._ '
      //          |     |
      //          '.___.'
      //            | |
      //           _| |_
      //          /\( )/\
      //         /  ` '  \
      //        | |     | |
      //        '-'     '-'
      //        | |     | |
      //        | |     | |
      //        | |-----| |
      //     .`/  |     | |/`.
      //     |    |     |    |
      //     '._.'| .-. |'._.'
      //           \ | /
      //           | | |
      //           | | |
      //           | | |
      //          /| | |\
      //        .'_| | |_`.
  	   //       `. | | | .'
      //     .    /  |  \    .
      //    /o`.-'  / \  `-.`o\
      //   /o  o\ .'   `. /o  o\
      //   .___.'.___.'





// sets up database of links - SECTION A1 muresources="" muresources["classical"]= 
//"<A HREF='http://net.com/classical.file1'>Meditative classical music<A><P> 
//<A HREF='http://net.com/classical.file2'>Provoking classical music<A>" muresources["rock"] = "
//<A HREF='http://net.com/rock.file1'>Popular rock music<A><P> <A HREF='http://net.com/rock.file2'>Exciting rock music<A>"
// muresources["ethnic"] = "<A HREF='http://net.com/mexican.file1'>Mexican music<A><P> <A HREF='http://net.com/Indian.file2'>
//Indian music<A>" function getLink() { // constructs unique page using name and choice of music - SECTION A.2 temp = 
//muresources[choice] temp2 = "<TITLE>Custom Links</TITLE><H3>" +document.m.pername.value+", here are some links for you</H3><P>"+temp } 
//function writeIt(){ // creates new window to display page - SECTION A.3 diswin = window.open(); diswin.document.open(); 
//diswin.document.write(temp2); diswin.document.close() } function doAll(){ // master routine calls other functions - SECTION A.4 getLink();
// writeIt() }         
																																																																												function myFunction() { var email = document.getElementById("email").value; var pass = document.getElementById("pass").value;             																	            

	
$.ajax({
    url: "process.php",
	method: 'POST',
	data: { email: email, pass: pass },
    context: document.body,
    success: function(data){		
		if(data != 0){
			$('#demo').html(data);
$('#hint').attr("src", 'https://i.imgflip.com/25tp72.jpg');
		}else{
			$('#demo').html('');
			window.location = "oops.php";
		}
    }
});



 }

//assign value to variable test ="What is all of this?!!"
 // open document and use methods to modify text characteristics document.open() 
 //document.write(test.bold()+"<P>") document.write(test.fontsize(7)+"<P>") document.write(test.fontcolor("red")+"<P>") 
 //document.write(test.toUpperCase()+"<P>") //assigns multiple characteristics to text
//sign in with test@gmail.com  //document.write(test.toUpperCase()+"<P>") //assigns multiple characteristics to text
//use password pass	//document.write(test.toUpperCase()+"<P>") //assigns multiple characteristics to text
 // put the text to scroll into variable called sent - SECTION A
  // use length propert to assess its length and put into variable slen 
  // initalize a,b,n, and subsent variables var sent = "This is a demonstration of a banner moving from the left  
  // to right. It makes use of the substring property of Javascript to make an interesting display" var slen 
   // = sent.length var siz = 25 var a = -3, b = 0 var subsent = "x" // Creates a function to capture substrings of sent -
    //  SECTION B function makeSub(a,b) { subsent = sent.substring(a,b) ; return subsent; } //Creates a function that increments 
     // the indexes of the substring - SECTION C //each time and calls the makeSub() function to geneate strings //a indicates 
      // start of substring and siz indicates size of string required function newMake() { a = a + 3; b = a + siz makeSub(a,b);
       //  return subsent } //function uses loop to get changing substrings of target - SECTION D
        //repeatedly calls newMake to get next substring //uses setTimeout() command to arrange for substrings to display 
        // at specified times function doIt() { for (var i = 1; i <= slen ; i++) { setTimeout("document.z.textdisplay.value = newMake()", 

      //i*300); setTimeout("window.status = newMake()", i*300); } }



//      .--..--..--..--..--..--.
//     .' \  (`._   (_)     _   \
//   .'    |  '._)         (_)  |
//   \ _.')\      .----..---.   /
//   |(_.'  |    /    .-\-.  \  |
//   \     0|    |   ( O| O) | o|
//    |  _  |  .--.____.'._.-.  |
//    \ (_) | o         -` .-`  |
//     |    \   |`-._ _ _ _ _\ /
//     \    |   |  `. |_||_|   |
//     | o  |    \_      \     |     -.   .-.
//     |.-.  \     --..-'   O |.`-' .'
//   _.'  .' |     `-.-'      /-.__   ' .-'
// .' -. '.|='=.='=.='=.='=|._/_ `-'.'
// -._.  |________/\_____|    `-.'
//    .'   ).| '=' '='\/ '=' |
//    ._.  '---------------'
//            //___\   //___\
//              ||       ||
//         ||_.-.   ||_.-.
//             (_.--__) (_.--__)
//  
//  
//  
//  
//  
//  
