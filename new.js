"use strict"

const { stringify } = require("querystring");

function diceRoll () {
  return Math.floor(Math.random() * 6) + 1
}

function sleep (milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds) {
      break;
    }
  }
}

function printBoard (participant, pos, length) {
  let board = ''
  for (let i=0; i<participant.length; i++) {
    board += `${printLine(participant[i], pos[i], length)} \n`
  }
  return board
}

function printLine (player, pos, length) {
  let track = ''
  for (let i=0; i<length; i++) {
    if (i == pos) track += `|${player}`
    else track += '| '
  }

  console.log(track)
}

function advance (player) {
    return player += diceRoll()
}

function finished (pos, length, participant) {
  for (let i=0; i<pos.length; i++) {
    if (pos[i] >= length-1) {
      winner(participant[i])
      return true
    }
  }
  return false
}

function winner (winner) {
  console.log(`player ${winner} is the winner`)
}

function clearScreen () {
  // Un-comment this line if you have trouble with console.clear();
  // return process.stdout.write('\033c');
  console.clear();
}

function startGame (playerCount, trackLength) {
  let alphabet = [] ;
  let angka = 65 ;
  let participant = ''
  let pos = []
  for ( let i = 0 ; i < 26 ; i ++ ) {
    alphabet.push(String.fromCharCode(angka++))
  }
  let cnt = 26 ;
  let idx = 0 ;
  let fla = true ;

if(playerCount- cnt > 0 ){
  while(fla){
    for (let i = 65 ; i < 65 + 26 ; i ++){
        if(cnt == playerCount) {
            fla = false ;
            break ;
        }
     let huruf = alphabet[idx]+ String.fromCharCode(i);
     alphabet.push(huruf)
     cnt++;
    }
    idx++ ;
  }
}
  for ( let i = 0 ; i < alphabet.length ; i ++) {
      console.log(alphabet[i])
  }
  if (playerCount < 2 || trackLength < 15) console.log('Jumlah Pemain Minimal 2 Dan Panjang Lintasan Minimal 15')
  else {
    for (let i=0; i<playerCount; i++) {
    participant += alphabet[i]
    if (pos[i] == undefined) pos[i] = 0
    else pos[i].push(0)
  }
  // return `${participant} ${pos}`
    let index = 0
    while (true) {
      printBoard(participant, pos, trackLength)
      sleep(800)
      if (finished(pos, trackLength, participant) == true) break
      clearScreen()

      pos[index] = advance(pos[index])
      if (pos[index] >= trackLength) pos[index] = trackLength-1

      index++
      if (index == pos.length) index = 0
    }
  }
}

startGame(process.argv[2], process.argv[3])
