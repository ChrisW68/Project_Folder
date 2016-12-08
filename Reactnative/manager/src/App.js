import React, { Component } from 'react';
import { View, Text } from 'react-native';
import { Provider } from 'react-redux';
import { createStore } from 'redux';
import firebase from 'firebase';
import reducers from './reducers';
import LoginForm from './components/LoginForm';


class App extends Component {
	componentWillMount() {
		const config = {
    apiKey: 'AIzaSyDz4fXwGfd_yhvsUZgZ_lfrakchu2LZfDM',
    authDomain: 'employee-adae1.firebaseapp.com',
    databaseURL: 'https://employee-adae1.firebaseio.com',
    storageBucket: 'employee-adae1.appspot.com',
    messagingSenderId: '485210606743'
  };
  firebase.initializeApp(config);
	}

	render() {
		return (
			<Provider store={createStore(reducers)}>
				<LoginForm />
			</Provider>
		);
	}
}

export default App;
