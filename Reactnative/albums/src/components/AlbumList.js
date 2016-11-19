//Import React and also want the Component property from the React library as well
import React, { Component } from 'react';
import { View } from 'react-native';
import axios from 'axios';
import AlbumDetail from'./AlbumDetail';

/* By using extends Component indicating 
I want to borrow functionality from the base Component class */
class AlbumList extends Component {
	//Class level property
	//Empty state 
	state = { albums: [] };

	componentWillMount() {
		axios.get('https://rallycoding.herokuapp.com/api/music_albums')
		.then(response => this.setState({ albums: response.data }));
	}

	renderAlbums() {
		return this.state.albums.map(album => 
			<AlbumDetail key={album.title} album={album} />
		);
	}

	render() {
		console.log(this.state);
		return (
			<View>
				{this.renderAlbums()}
			</View>
		);
	}
}

export default AlbumList;
