import React, { Component } from 'react';
import { Text } from 'react-native';
import firebase from 'firebase';
import { Button, Card, CardSection, Input } from './commons';

class LoginForm extends Component {
	/* Text typed in the fields exist lives a 
	piece of state in the state component */
	state = { email: '', password: '', error: '' };

	//This will authentical the user when the Log in button is pressed using firebase
	onButtonPress() {
		const {email, password } = this.state;
		firebase.auth().signInWithEmailAndPassword(email, password)  //The email and password properties are passed to the function
			.catch(() => {
				firebase.auth().createUserWithEmailAndPassword(email, password)
					.catch(() => {
						this.setState({ error: 'Uh Oh, Authentification Failed!'})
					});
			});
	}

	render() {
		return (
			<Card>
				<CardSection>
					<Input 
						placeholder="user@gmail.com" //A example for placeholder
						label="Email: "
						value={this.state.email}
						/* Any time the user types in the field
						the fact or function is passed as a prop into Input 
						that was created */
						onChangeText={email => this.setState({ email })}
					/>
				</CardSection>

				<CardSection>
					<Input
						secureTextEntry //By having a boolean property as true only listing the property
						placeholder="password"
						label="Password"
						value={this.state.password}
						onChangeText={password => this.setState({ password })}

					/>
				</CardSection>

				<Text style={styles.errorTextStyle}>
					{this.state.error}
				</Text>

				<CardSection>
					<Button onPress={this.onButtonPress.bind(this)}>
						Log In
					</Button>
				</CardSection>
			</Card>
		);
	}
}

const styles = {
	errorTextStyle: {
		fontSize: 20,
		alignSelf: 'center',
		color: 'red'
	}
};

export default LoginForm;