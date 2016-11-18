//Import React and also want the Component property from the React library as well
import React, { Component } from 'react';
import { View, Text } from 'react-native';
import axios from 'axios';

/* By using extends Component indicating 
I want to borrow functionality from the base Component class */
class AlbumList extends Component {
	componentWillMount() {
		axios.get('https://rallycoding.herokuapp.com/api/music_albums')
		.then(response => console.log(response));
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
