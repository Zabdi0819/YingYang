import React from 'react';
import FacebookIcon from '@material-ui/icons/Facebook';
import {makeStyles} from '@material-ui/core/styles/makeStyles';

const FaceIcon = (props) => {
	return (
		<a href={'https://www.facebook.com/Style-et-Beauté-102324065280517'} target={'_blank'}>
			<FacebookIcon className={props.className}/>
		</a>
	)
}
export default FaceIcon;