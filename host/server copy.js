require("dotenv").config();
const { v4: uuidv4 } = require("uuid");
const AccessToken = require("twilio").jwt.AccessToken;
const VideoGrant = AccessToken.VideoGrant;
const express = require("express");
const app = express();
const port = 5000;
const cors = require('cors');

app.use(express.json());

const twilioClient = require("twilio")(
  process.env.TWILIO_API_KEY_SID,
  process.env.TWILIO_API_KEY_SECRET,
  { accountSid: process.env.TWILIO_ACCOUNT_SID }
);

app.use(cors()); 

app.get("/", (req, res) => {
  res.send("Server is running!");
});

app.get("/token", async (req, res) => {
  let { identity1, roomName } = req.query;

 let identity=uuidv4();

  if (!identity || !roomName) {
    return res.status(400).json({ error: "Identity and roomName are required" });
  }

  try {
    const token = new AccessToken(
      process.env.TWILIO_ACCOUNT_SID,
      process.env.TWILIO_API_KEY_SID,
      process.env.TWILIO_API_KEY_SECRET,
      { identity: }
    );

    const videoGrant = new VideoGrant({
      room: roomName,
    });
    token.addGrant(videoGrant);

    res.json({ token: token.toJwt(), identity:identity, room: roomName, });
  } catch (error) {
    console.error("Error generating token:", error);
    res.status(500).json({ error: "Failed to generate token" });
  }
});

app.listen(port, () => {
  console.log(`Express server running on port ${port}`);
});
