import React, { Component } from 'react';
import { Text } from 'react-native';
import firebase from 'firebase';
import { Button, Card, CardSection, Input, Spinner } from './commons';

class LoginForm extends Component {
	/* Text typed in the fields exist lives a 
	piece of state in the state component */
	state = { email: '', password: '', error: '', loading: false };

	//This will authentical the user when the Log in button is pressed using firebase
	onButtonPress() {
		const {email, password } = this.state;
		//If login failed once and tried to login again the error message will clear out
		this.setState({ error: '', loading: true });

		firebase.auth().signInWithEmailAndPassword(email, password)  //The email and password properties are passed to the function
			.catch(() => {
				firebase.auth().createUserWithEmailAndPassword(email, password)
					.catch(() => {
						this.setState({ error: 'Ah Crap, You not a authenticated!'})
					});
			});	
	}

	renderButton() {
		if(this.state.loading){
			return <Spinner size="small" />;
		}
		return (
			<Button onPress={this.onButtonPress.bind(this)}>
				Log In
			</Button>
		)
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
					{this.renderButton()}
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