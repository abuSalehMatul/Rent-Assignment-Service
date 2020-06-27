const recordButton = document.querySelector("#record");
const stopButton = document.querySelector("#stop");
recordButton.addEventListener("click", () => {
    record();
})
stopButton.addEventListener("click", () => {
    stop();
})

let mic, recorder, soundFile, blob;
let status = 0;
let fd = new FormData();
var filename = new Date().toISOString();
function setup() {
    mic = new p5.AudioIn();
    recorder = new p5.SoundRecorder();
    soundFile = new p5.SoundFile();
    recorder.setInput(mic);
}

function record() {
    mic.start();
    recorder.record(soundFile);
    recorder.record(soundFile);
    stopButton.classList.remove('d-none');
    recordButton.classList.add('d-none');
}

function stop() {
    var xhr = new XMLHttpRequest();
    mic.stop();
    recorder.stop();
    soundFile.play();
    stopButton.classList.add('d-none');
    recordButton.classList.remove('d-none');
    blob = getBlob();
    fd.append("audio_data",blob,filename);
    xhr.open("POST","http://essay-lite.io/en/DemoTest/save_voice")
function getBlob() {
    var dataView = convertToWav(soundFile.buffer);
    var blob = new Blob([dataView], {
        type: 'application/octet-stream'
    });

    return blob;
    // p5.prototype.writeFile([dataView], fileName, 'wav');
}
}