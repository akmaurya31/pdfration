const express = require('express');
const { v4: uuidv4 } = require('uuid');
const { AccessToken } = require('twilio').jwt;
const VideoGrant = AccessToken.VideoGrant;

const app = express();

// Twilio credentials
const twilioAccountSid = 'ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
const twilioApiKeySid = 'SKXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';
const twilioApiKeySecret = 'your_api_key_secret_here';

// const twilioAccountSid =   'ACb56592f20230c5a42b8d5429acda0137';
// const twilioApiKeySid =    'SK34d5213f5c15b847956ce7fd72ee6a75';
// const twilioApiKeySecret = 'aNhEpi2Z1hCXJ10nAyIKAlZhe4WQsZOR';

// Endpoint to generate token
app.get('/token', (req, res) => {
  // Generate a unique identity for the user (you can replace it with a dynamic value based on your use case)
  const identity = uuidv4(); // Generates a unique user identity

  // Create the video grant
  const videoGrant = new VideoGrant();

  // Create the access token
  const token = new AccessToken(
    twilioAccountSid,
    twilioApiKeySid,
    twilioApiKeySecret
  );

  // Add the video grant to the token
  token.addGrant(videoGrant);

  // Set the identity
  token.identity = identity;

  // Send the generated token to the client
  res.json({ token: token.toJwt() });
});

// Start the server
app.listen(3000, () => console.log('Server running on port 3000'));
