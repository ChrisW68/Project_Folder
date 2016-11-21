import React, { Component } from 'react';
import { View, Text } from 'react-native';
import firebase from 'firebase';
import { Header } from './components/commons';
import LoginForm from './components/LoginForm';

class App extends Component {
	componentWillMount() {
		firebase.initializeApp( {
	    apiKey:'AIzaSyCjbvyj3yqh6_WiazYjspIDKGG77Ll8KJY',
	    authDomain: 'authentication-c7a45.firebaseapp.com',
	    databaseURL: 'https://authentication-c7a45.firebaseio.com',
	    storageBucket: 'authentication-c7a45.appspot.com',
	    messagingSenderId: '366396255654'
  	});
	}
	render() {
		return (
			<View>
				<Header headerText="Authentication" />
				<LoginForm />
			</View>
		);
	}
}

export default App;
