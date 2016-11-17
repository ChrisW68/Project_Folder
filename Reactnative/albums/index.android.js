// Index.android.js - Place code in here for Android!!

// Import a library to help create a component
import React from 'react';
import { AppRegistry } from 'react-native';

//Import the relative path for the header.js
import Header from './src/components/header';


// Create a component.  Is a JavaScript function that return some amount of JSX
// React-native take the component and render to screen
//Component nesting.  Taking the header component and placing it in App component
const App = () => (

	//When Header is rendered the prop of headerText is passed in with a value Albums
    <Header headerText={'Albums'} />
    );

// Render it to the device

AppRegistry.registerComponent('albums', () => App);
