//Import React and also want the Component property from the React library as well
import React, { Component } from 'react';
import { View, Text } from 'react-native';

/* By using extends Component indicating 
I want to borrow functionality from the base Component class */
class AlbumList extends Component {
	componentWillMount() {
	console.log('componentWillMount in AlbumList');

	}

	render() {
		return (
			<View>
				<Text>Album List!!</Text>
			</View>
		);
	}
}

export default AlbumList;
