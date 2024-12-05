const joinButton = document.getElementById('join-room');
const roomNameInput = document.getElementById('room-name');
const localVideo = document.getElementById('local-video');
const remoteVideoContainer = document.getElementById('remote-videos'); // Assuming this is a container for multiple remote videos

let room;

async function getToken(identity = 'Rekha1', roomName = 'Rekha') {
  
  const queryParams = new URLSearchParams({
    identity,
    roomName
  });
  const response = await fetch(`https://bharatcschub.online:5000/token?${queryParams.toString()}`);
  const data = await response.json();
  return data.token;
}

joinButton.addEventListener('click', async () => {
  const roomName = roomNameInput.value || 'Rekha'; // Get room name from input or default to 'Rekha'
  const token = await getToken();

  console.log(token, roomName, 'ffff');

  Twilio.Video.connect(token, { name: roomName }).then(room => {
    console.log(`Connected to Room: ${room.name}`);

    // Attach local video
    Twilio.Video.createLocalVideoTrack().then(track => {
      localVideo.srcObject = new MediaStream([track.mediaStreamTrack]);
    });

    // Attach remote participants
    room.on('participantConnected', participant => {
      console.log(`Participant "${participant.identity}" connected`);
      const remoteVideoElement = document.createElement('video');
      remoteVideoElement.autoplay = true;
      remoteVideoElement.playsInline = true;
      remoteVideoContainer.appendChild(remoteVideoElement);

      participant.tracks.forEach(publication => {
        if (publication.isSubscribed) {
          const track = publication.track;
          remoteVideoElement.srcObject = new MediaStream([track.mediaStreamTrack]);
        }
      });

      participant.on('trackSubscribed', track => {
        remoteVideoElement.srcObject = new MediaStream([track.mediaStreamTrack]);
      });
    });

    // Handle disconnection
    room.on('participantDisconnected', participant => {
      console.log(`Participant "${participant.identity}" disconnected`);
      // Handle disconnection logic for each participant if necessary
    });

  }).catch(error => {
    console.error('Error connecting to room: ', error);
  });
});
