import React, { Component } from 'react';
import { Provider } from 'react-redux';
import { createStore, applyMiddleware } from 'redux';
import firebase from 'firebase';
import reduxThunk from 'redux-thunk';
import reducers from './reducers';
import Router from './Router';


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
		const store = createStore(reducers, {}, applyMiddleware(reduxThunk));

		return (
			<Provider store={store}>
				<Router />
			</Provider>
		);
	}
}

export default App;
