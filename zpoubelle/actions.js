// Créer une librairie javascript pour les actions

const actions = {
     // Ajoute une action
     addAction: (state, action) => {
          state.actions.push(action); // Add action
     },
     // Supprime une action
     removeAction: (state, action) => {
          state.actions.splice(state.actions.indexOf(action), 1); // Remove action
     },
     // Supprime une action
     clearActions: (state) => {
          state.actions = []; // Clear actions
     },

     // Editer une action
     editActions: (state, action) => {
          state.actions[state.actions.indexOf(action)] = action; // Edit action
     },

     // Modifier une action
     updateActions: (state, _action) => {
          state.actions = state.actions.map((action) => {
               if (action.id === action.id) {
                    return action;
               } else {
                    return action;
               }
          });
     },

     // Ajoute groupe d'actions
     addActionGroup: (state, action) => {
          state.actionGroups.push(action); // Add action
          state.actionGroups.sort((a, b) => {
               if (a.id < b.id) {
                    return -1;
               } else if (a.id > b.id) {
                    return 1;
               } else {
                    return 0;
               }
          });
     },

     // Supprime groupe d'actions
     removeActionGroup: (state, action) => {
          state.actionGroups.splice(state.actionGroups.indexOf(action), 1); //
     },

     // Mettre à jour un groupe d'actions
     updateActionGroup: (state, action) => {
          state.actionGroups[state.actionGroups.indexOf(action)] = action; // Edit action
          state.actionGroups.sort(a); // Sort action groups
          state.actionGroups = state.actionGroups.map((action) => {
               if (action.id === action.id) {
                    return action;
               } else {
                    return action;
               }
          });
     },

     // Afficher une action
     showAction: (state, action) => {
          state.showAction = true; // Edit action
     },

     // Cacher une action
     hideAction: (state, action) => {
          state.hideAction = false; // Edit action
     },
};

// Usage de la fonction de librairie

export default (state = initialState, action) => {
     switch (action.type) {
          case actions.addAction:
               return Object.assign(
                    {},
                    state,
                    actions.addAction(state, action)
               );
          case actions.removeAction:
               return Object.assign(
                    {},
                    state,
                    actions.removeAction(state, action)
               );
          case actions.clearActions:
               return Object.assign({}, state, actions.clearActions(state));
          case actions.editActions:
               return Object.assign(
                    {},
                    state,
                    actions.editActions(state, action)
               );
          case actions.updateActions:
               return Object.assign(
                    {},
                    state,
                    actions.updateActions(state, action)
               );
          case actions.addActionGroup:
               return Object.assign(
                    {},
                    state,
                    actions.addActionGroup(state, action)
               );
          case actions.removeActionGroup:
               return Object.assign(
                    {},
                    state,
                    actions.removeActionGroup(state, action)
               );
          case actions.updateActionGroup:
               return Object.assign(
                    {},
                    state,
                    actions.updateActionGroup(state, action)
               );
          case actions.showAction:
               return Object.assign(
                    {},
                    state,
                    actions.showAction(state, action)
               );
          case actions.hideAction:
               return Object.assign(
                    {},
                    state,
                    actions.hideAction(state, action)
               );
          default:
               return state;
     }
};

// Utilisation de la fonction de librairie

export const getActionGroups = (state) => {
     return state.actionGroups;
};

export const getActions = (state) => {
     return state.actions;
};

// Utilisation de la méthode hideActions

export const getShowAction = (state) => {
     return state.showAction;
};
