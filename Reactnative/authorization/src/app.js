import React, { Component } from 'react';
import { View, Text } from 'react-native';
import firebase from 'firebase';
import { Header, Button, Spinner } from './components/commons';
import LoginForm from './components/LoginForm';

class App extends Component {
	state = { loggedIn: null };  //Do not know if user is logged in

	componentWillMount() {
		firebase.initializeApp( {
	    apiKey:'AIzaSyCjbvyj3yqh6_WiazYjspIDKGG77Ll8KJY',
	    authDomain: 'authentication-c7a45.firebaseapp.com',
	    databaseURL: 'https://authentication-c7a45.firebaseio.com',
	    storageBucket: 'authentication-c7a45.appspot.com',
	    messagingSenderId: '366396255654'
  	});

		firebase.auth().onAuthStateChanged((user) => {
			if (user) {
				this.setState({ loggedIn: true });		//User is logged in
			} else {
				this.setState({ loggedIn: false });		//User is not logged in
			}
		});
	}

	renderContent() {
		switch (this.state.loggedIn) {
			case true:
				return (
					<Button onPress={() => firebase.auth().signOut() }>
						Log Out
					</Button>
					);
			case false:
				return <LoginForm />;
			default:
				return <Spinner size="large" />;
		}
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
