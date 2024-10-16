module.exports = {
  content: ['*',  './styles.css',
    './public/**/*.html',
    './src/**/*.{js,jsx,ts,tsx}',
    'node_modules/flowbite/**/*.js'  
  ], // Include all your HTML files
  theme: {
    extend: {},
  },
  plugins: [
    require('flowbite/plugin') // Add Flowbite plugin
  ],
};
 