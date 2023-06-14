//kamus
var kataKunci = ["hi", "halo", "hola"];

//element chatbox
var chatbox = document.getElementById('chatbox');

//membaca kalimat dalam chat
var teksChatbox = chatbox.textContent;

for (var i = 0; i < kataKunci.length; i++) {
  var kata = kataKunci[i];

  if (teksChatbox.includes(kata)) {
    // Membuat pesan baru dengan teks "Halo juga"
    var newMessage = document.createElement("div");
    newMessage.classList.add("chatbox");
    var newMessageText = document.createTextNode("Bot: Hi juga ^^");
    newMessage.appendChild(newMessageText);

    // Menambahkan pesan baru ke dalam elemen chat
    chat.appendChild(newMessage);

    // Menghapus nilai dari input chat
    chatInput.value = "";
    break; // Keluar dari perulangan setelah menemukan cocokan pertama
  }
}


function sendMessage() {
  // Mengambil nilai dari input chat
  var message = chatInput.value;

  // Mengecek jika lawan bicara mengatakan "Hi"
  if (message.toLowerCase() === "hi") {
    // Membuat pesan baru dengan teks "Halo juga"
    var newMessage = document.createElement("div");
    newMessage.classList.add("chetbox");
    var newMessageText = document.createTextNode("Anda: " + message);
    newMessage.appendChild(newMessageText);

    // Menambahkan pesan baru ke dalam elemen chat
    chat.appendChild(newMessage);

    // Menghapus nilai dari input chat
    chatInput.value = "";
  }    
  else {
    // Jika pesan tidak sama dengan "Hi", menampilkan pesan asli
    var newMessage = document.createElement("div");
    newMessage.classList.add("chetbox");
    var newMessageText = document.createTextNode("Anda: " + message);
    newMessage.appendChild(newMessageText);

    // Menambahkan pesan baru ke dalam elemen chat
    chat.appendChild(newMessage);

    // Menghapus nilai dari input chat
    chatInput.value = "";
  } 
}
