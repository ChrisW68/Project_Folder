// Index.android.js - Place code in here for Android!!

// Import a library to help create a component
import React from 'react';
import { AppRegistry, View } from 'react-native';

//Import the relative path for the header.js
import Header from './src/components/header';
import AlbumList from './src/components/AlbumList';


// Create a component.  Is a JavaScript function that return some amount of JSX
// React-native take the component and render to screen
//Component nesting.  Taking the header component and placing it in App component
const App = () => (
  //One top level tag View with two components of headerText and AlbumList
  <View>
    <Header headerText={'Albums'} />
    <AlbumList />
  </View>
);

// Render it to the device

AppRegistry.registerComponent('albums', () => App);
