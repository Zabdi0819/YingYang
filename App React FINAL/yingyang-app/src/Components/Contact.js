import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import TextField from '@material-ui/core/TextField';
import Button from '@material-ui/core/Button';

const useStyles = makeStyles((theme) => ({
  root: {
    '& > *': {
      margin: theme.spacing(1),
      width: '25ch',
    },
  },
  paper: {
    color: 'black',
  },
  paperxd: {
    color: 'pink',

  },
  paper2: {
    backgroundColor: 'black',
    color: 'white',
    width: '25ch',
    '&:hover': {
      color: 'black',
    },
  },
  back: {
    background:'url("img/fondo.jpg") no-repeat',
    backgroundSize: '100%',
    height: 850,
  },
  left: {
    float: 'left',
  }
}));

export default function ColorTextFields() {
  const classes = useStyles();

  return (
    <div className={classes.back}>
    <div className={classes.left}>
    <h2 className={classes.paperxd}>Contactanos</h2>
      <form className={classes.root} noValidate autoComplete="off">
        <TextField id="outlined-secondary" label="Nombre" variant="outlined" color="secondary"/>
        <TextField id="outlined-secondary" label="Direccion" variant="outlined" color="secondary"/>
        <TextField id="outlined-secondary" label="Email" variant="outlined" color="secondary"/>
        <TextField id="outlined-secondary" label="Teléfono" variant="outlined" color="secondary"/>
        <TextField id="outlined-secondary" label="Asunto" variant="outlined" color="secondary"/>
        <TextField id="outlined-secondary" label="Escribe tu mensaje aqui..." variant="outlined" color="secondary"/>
      </form>
      <Button className={classes.paper2} variant="outlined">Enviar</Button>
      <h4 className={classes.paper}>¡Gracias por tu mensaje!</h4>
      <p className={classes.paper}>Teléfono: 449 935 3402</p>
      <p className={classes.paper}>styleetbeaute2@gmail.com</p>
    </div>
    </div>
  );
}