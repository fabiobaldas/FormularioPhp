using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Cadastro_livro
{
    #region Livros
    public class Livros
    {
        #region Member Variables
        protected int _cod;
        protected string _titulo;
        protected string _autor;
        protected string _editora;
        protected unknown _preco;
        #endregion
        #region Constructors
        public Livros() { }
        public Livros(string titulo, string autor, string editora, unknown preco)
        {
            this._titulo=titulo;
            this._autor=autor;
            this._editora=editora;
            this._preco=preco;
        }
        #endregion
        #region Public Properties
        public virtual int Cod
        {
            get {return _cod;}
            set {_cod=value;}
        }
        public virtual string Titulo
        {
            get {return _titulo;}
            set {_titulo=value;}
        }
        public virtual string Autor
        {
            get {return _autor;}
            set {_autor=value;}
        }
        public virtual string Editora
        {
            get {return _editora;}
            set {_editora=value;}
        }
        public virtual unknown Preco
        {
            get {return _preco;}
            set {_preco=value;}
        }
        #endregion
    }
    #endregion
}