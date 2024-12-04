require("dotenv").config();
const { v4: uuidv4 } = require("uuid");
const AccessToken = require("twilio").jwt.AccessToken;
const VideoGrant = AccessToken.VideoGrant;
const express = require("express");
const app = express();
const port = 5000;
const cors = require('cors');

console.log(uuidv4(),"ssssssffff");


app.use(express.json());
app.use(cors()); 

const twilioClient = require("twilio")(
  process.env.TWILIO_API_KEY_SID,
  process.env.TWILIO_API_KEY_SECRET,
  { accountSid: process.env.TWILIO_ACCOUNT_SID }
);

app.get("/", (req, res) => {
  res.send("Server is running!");
});

app.get("/token", async (req, res) => {
  let { identity, roomName } = req.query;
  // Use provided identity1 or generate a new UUID if not provided
  identity =  uuidv4();
  // if (!roomName) {
  //   return res.status(400).json({ error: "roomName is required" });
  // }

  try {
    const token = new AccessToken(
      process.env.TWILIO_ACCOUNT_SID,
      process.env.TWILIO_API_KEY_SID,
      process.env.TWILIO_API_KEY_SECRET,
      { identity }
    );

    const videoGrant = new VideoGrant({
      room: roomName,
    });
    token.addGrant(videoGrant);

    res.json({ token: token.toJwt(), identity, room: roomName });
  } catch (error) {
    console.error("Error generating token:", error);
    res.status(500).json({ error: "Failed to generate token" });
  }
});

app.listen(port, () => {
  console.log(`Express server running on port ${port}`);
});
