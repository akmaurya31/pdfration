const express = require('express');
const { v4: uuidv4 } = require('uuid');
const { AccessToken } = require('twilio').jwt;
const VideoGrant = AccessToken.VideoGrant;

const app = express();

const twilioAccountSid = 'ACb56592f20230c5a42b8d5429acda0137';
const twilioAuthToken = '23166bda261e0e4ae9555af5c088bde4';
const twilioApiKeySid = 'SK34d5213f5c15b847956ce7fd72ee6a75';
const twilioApiKeySecret = 'aNhEpi2Z1hCXJ10nAyIKAlZhe4WQsZOR';

// avinash
// SID SK34d5213f5c15b847956ce7fd72ee6a75
// Secret aNhEpi2Z1hCXJ10nAyIKAlZhe4WQsZOR

app.get('/token', (req, res) => {
  const identity = uuidv4();

  const videoGrant = new VideoGrant();
  const token = new AccessToken(
    twilioAccountSid,
    twilioApiKeySid,
    twilioApiKeySecret
  );

  token.addGrant(videoGrant);
  token.identity = identity;

  res.json({ token: token.toJwt() });
});

app.listen(3000, () => console.log('Server running on port 3000'));
